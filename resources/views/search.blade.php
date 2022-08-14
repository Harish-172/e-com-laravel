@extends('layouts.main')
@section('content')
@php 
 
 @endphp 

<div class="search-wrappeer">
  <h1 class="search-product-heading">Searched Products</h1><br>
  <div class="trendng-inner">
  @if(!empty($searchProduct))
    @foreach($searchProduct as $product)
    <div>
      <a href="{{route('product.detail', $product['id'])}}">
        <div class="Search-product-item">
            <img src="{{$product['gallery']}}" alt="Los Angeles" style="width:100%; height:250px">
        </div> 
        <h2 class="product-heading">
          {{$product['name']}} 
        </h2>
      </a>  
    </div>  
    @endforeach 
    @else
        <h2 class="search-product-heading">Nothing Found</h2>
    @endif
  </div>
</div>

@endsection