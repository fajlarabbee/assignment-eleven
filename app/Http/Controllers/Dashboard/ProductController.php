<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->latest()->paginate(10);
        return view('backend.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'product_name' => 'required',
            'description' => 'nullable|string',
            'stock' => 'required',
            'price' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);


        if($request->hasFile('thumbnail')) {
            $thumbnail = $request->thumbnail;
            $thumbImage = uniqid("product_") . '-' . $thumbnail->getClientOriginalName();
            $uploaded = $request->thumbnail->move(public_path('uploads/product'), $thumbImage);
            $validated['thumbnail'] = $thumbImage;
        }

        DB::table('products')->insert($validated);

        return back()->with('success', 'Product added successfully.');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product =  DB::table('products')->find($id);
        if(! $product) {
            return back();
        }

        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'product_name' => 'required',
            'description' => 'nullable|string',
            'stock' => 'required',
            'price' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);


        if($request->hasFile('thumbnail')) {
            $thumbnail = $request->thumbnail;
            $thumbImage = uniqid("product_") . '-' . $thumbnail->getClientOriginalName();
            $uploaded = $request->thumbnail->move(public_path('uploads/product'), $thumbImage);
            $validated['thumbnail'] = $thumbImage;
        } else {
            unset($validated['thumbnail']);
        }

        DB::table('products')->where('id', $id)->update($validated);

        return back()->with('success', 'Product added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = DB::table('products')->find($id);

        if($product) {
            DB::table('products')->delete($product->id);
            unlink(public_path('uploads/product/' . $product->thumbnail));
        }

        return redirect()->route('product.index')->with('success', 'Product has been deleted successfully.');
    }
}
