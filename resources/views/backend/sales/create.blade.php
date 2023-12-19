@extends('backend.app')
@section('title', 'Add Sale Item' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Add Sale Item')

@section('content')
    <!-- horizontal form -->
   <div class="mx-auto max-w-xl">
       <x-form-errors />
       <x-message-success />
       <x-message-error />

       <!-- form controls -->
       <form action="{{ route('sale.store') }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
           @csrf

           <div>
               <label for="product_id">Product Name <span class="text-danger">required</span></label>
               <select id="seachable-select" name="product_id">
                   @foreach($products as $product)
                       <option value="{{ $product->id }}" >{{ $product->product_name }}</option>
                   @endforeach
               </select>
           </div>


{{--           <div>--}}
{{--               <label for="available_stock">Available Quantity</label>--}}
{{--               <input id="available_stock" type="text" value="{{ $product->stock }}" class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b]" disabled />--}}
{{--           </div>--}}

{{--           <div>--}}
{{--               <label for="unit_price">Unit Price</label>--}}
{{--               <input id="unit_price" type="text" value="{{ $product->price }}" placeholder="Product Name" class="form-input disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b]"  required disabled />--}}
{{--           </div>--}}
           <div>
               <label for="sale_stock">Quantity <span class="text-danger">required</span></label>
               <input id="sale_stock" type="number" value="{{ old('quantity') }}" step=".01"  name="quantity" placeholder="Quantity" class="form-input" required />
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
