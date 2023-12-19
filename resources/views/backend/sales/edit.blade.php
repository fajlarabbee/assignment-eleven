@extends('backend.app')
@section('title', 'Edit Sale Item' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Edit Sale Item')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
        <x-form-errors />
        <x-message-success />
        <x-message-error />

        <!-- form controls -->
        <form action="{{ route('sale.update', $sale_item->id) }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="product_id">Product Name <span class="text-danger">required</span></label>
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <input id="product_name" type="text" value="{{ $product->product_name }}" class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b]" disabled />
            </div>


            <div>
                <label for="available_stock">Available Quantity</label>
                <input id="available_stock" type="text" value="{{ old('stock', $product->stock) }}" class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b]" disabled />
            </div>

            <div>
                <label for="unit_price">Unit Price</label>
                <input id="unit_price" type="text" value="{{ $product->price }}" placeholder="Product Name" class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b]"  required disabled />
            </div>
            <div>
                <label for="sale_stock">Quantity <span class="text-danger">required</span></label>
                <input id="sale_stock" type="number" value="{{ old('quantity', $sale_item->quantity) }}" step=".01"  name="quantity" placeholder="Quantity" class="form-input" required />
            </div>
            <button type="submit" class="btn btn-primary !mt-6">Sale</button>
        </form>
    </div>

@endsection


@push('other-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            // seachable
            var options = {
                searchable: true
            };
            NiceSelect.bind(document.getElementById("seachable-select"), options);
        });
    </script>
@endpush
