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
