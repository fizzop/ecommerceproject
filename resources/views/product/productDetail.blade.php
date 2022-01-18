@extends('blank')
@section("content")
<div class="container">
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>PRODUCT DETAIL</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('uploads/images/'.$product['productImage']) }}" width="250px" height="250px" alt="Image">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h5>{{$product['productId']}}</h5>
                <h5>{{$product['productName']}}</h5>
                <h5>{{$product['productPrice']}}</h5>
                <h5>{{$product['productDes']}}</h5>

                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    @endsection