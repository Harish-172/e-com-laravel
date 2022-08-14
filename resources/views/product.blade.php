@extends('layouts.main')
@section('content')
<div class="" id="home-page">
  <div class="row">
     <!-- <h2>Carousel Example</h2>   -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    @if(!empty($products))
    <div class="carousel-inner">
        @php $i=0 @endphp
        @foreach($products as $product)
          
            <div class="item @if($i == 0) active @endif">
              <a href="{{route('product.detail', $product['id'])}}">
                <img src="{{$product['gallery']}}" alt="Los Angeles" style="width:100%; height:300px">
                <h2 class="product-heading">
                  {{$product['name']}} 
                </h2>
                <p class="product-description">
                  {{$product['description']}}
                </p>
              </a>     
            </div>
           
            @php $i++ @endphp
        @endforeach    
    </div>
    @endif
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>

<!-- Trending products -->
@if(!empty($products))
<div class="trending-wrappeer">
  <h1 class="trending-product-heading">Trending Products</h1><br>
  <div class="trendng-inner">
    @foreach($products as $product)
    <div>
      <a href="{{route('product.detail', $product['id'])}}">
        <div class="trending-product-item">
            <img src="{{$product['gallery']}}" alt="Los Angeles" style="width:100%; height:250px">
        </div> 
        <h2 class="product-heading">
          {{$product['name']}} 
        </h2>
      </a>  
    </div>  
    @endforeach 
  </div>
</div>
@endif
@endsection