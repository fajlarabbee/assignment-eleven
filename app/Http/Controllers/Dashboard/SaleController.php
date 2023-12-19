<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = DB::table('sales as s')
            ->join('products as p', 'p.id', 's.product_id')
            ->select('s.id', 'p.product_name', 's.unit_price', 's.quantity', 's.subtotal', 's.created_at')
            ->latest()
            ->paginate(10);


        return view('backend.sales.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = DB::table('products')->get();

        return view('backend.sales.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $product = DB::table('products')->find($request->input('product_id'));
        $current_stock = ($product->stock - $request->input('quantity'));


        $validated['subtotal'] = $request->input('quantity') * $product->price;
        $validated['unit_price'] = $product->price;

        if($current_stock < 0) {
            return back()->with('error', 'Quantity is less than stock');
        }

        DB::table('products')->where('id', $request->input('product_id'))->update([
            'stock' => $current_stock
        ]);


        DB::table('sales')->insert($validated);

        return back()->with('success', 'Sale item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale_item =  DB::table('sales')->find($id);
        if(! $sale_item) {
            return back();
        }

        $product = DB::table('products')->find($sale_item->product_id);

        return view('backend.sales.edit', compact('sale_item', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $product = DB::table('products')->find($request->input('product_id'));
        $sale_item = DB::table('sales')->find($id);

        $new_quantity = ($sale_item->quantity - $request->input('quantity'));

        $product->stock += $sale_item->quantity;


        $current_stock = ($product->stock - $request->input('quantity'));


        $validated['subtotal'] = $request->input('quantity') * $product->price;
        $validated['unit_price'] = $product->price;

        if($current_stock < 0) {
            return back()->with('error', 'Quantity is less than stock');
        }


        DB::table('products')->where('id', $request->input('product_id'))->update([
            'stock' => $current_stock
        ]);


        DB::table('sales')->where('id', $id)->update($validated);

        return back()->with('success', 'Sale item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale_item = DB::table('sales')->find($id);
        if($sale_item) {
            DB::table('sales')->delete($sale_item->id);
        }

        return redirect()->route('sale.index')->with('success', 'Sale Item has been deleted successfully.');
    }
}
