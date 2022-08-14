@extends('layouts.main')
@section('content')
@if(!empty($productDetails))
    <div class="container product-detail-container">
        <div class="row" id="product-detail">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$productDetails[0]['gallery']}}" alt="" srcset="">
            </div>
            <div class="col-sm-6">
                <a href="{{route('home')}}">Go Back</a>  
                <h3 class="product-name"><b>Name:</b> <span>{{$productDetails[0]['name']}}</span></h3> 
                <h3 class="product-price"><b>Price:</b> {{$productDetails[0]['price']}}</h3>
                <h3 class="product-category"><b>Category:</b> {{$productDetails[0]['category']}}</h3>
                <h3 class="product-desc"><b>Description:</b> {{$productDetails[0]['description']}}</h3>
                <br><br>
                <form action="{{route('add-to-cart')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$productDetails[0]['id']}}">
                    <button class="btn btn-success">Add To Cart</button>
                </form>
                
                <br><br>
                <button class="btn btn-primary">Buy Now</button>
                <br><br>

            </div>
        </div>
    </div>
@endif    
@endsection