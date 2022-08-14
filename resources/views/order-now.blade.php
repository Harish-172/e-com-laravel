@extends('layouts.main')
@section('content')
@if(session()->has('success'))
    <div class="alert alert-danger">
        {{session()->get('success')}}
    </div>
@endif
<div class="order-now">
    <table class="table table-hover w-50">
    <!-- <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead> -->
    <tbody>
        <tr>
        <th scope="row">Price</th>
        <td>{{$totalPrice}} Rupees</td>
        
        </tr>
        <tr>
        <th scope="row">Tax</th>
        <td> 0 Rupees</td>
        </tr>
        <tr>
        <th scope="row">Delivery</th>
        <td>100</td>
        </tr>
        <tr>
        <th scope="row">Total Amount</th>
        <td> {{$totalPrice + 100}}</td>
        </tr>
    </tbody>
    </table>
    <br><br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="{{route('order.placed')}}">
    @csrf
    <div class="form-group">
        <textarea placeholder="Enter your address...." name="address" id="" cols="100" rows="5"></textarea>
        @error('address')<span class="text-danger">  {{$message}} </span>@enderror
    </div>
    <div class="form-group">
        <label for="payment">Payment Methods</label><br><br>
        <p>
            <input type="radio" name="payment" value="Online" id="payment">
            <span>Online Payment</span>
        </p>
        <p>
            <input type="radio" name="payment" value="EMI" id="emi">
            <span>EMI Payment</span>
        </p>
        <p>
            <input type="radio" name="payment"  value="cod" id="cod">
            <span>Payment on Delivery</span>
        </p>
        @error('payment')<span class="text-danger">  {{$message}} </span>@enderror
    </div>

    <button type="submit" class="btn btn-default">Order NOw</button>
    </form>
    <br><br><br>
</div>    
@endsection