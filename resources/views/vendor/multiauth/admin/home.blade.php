@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    @include('multiauth::message')
                    You are logged in to {{ config('multiauth.prefix') }} side!

                    <div class="log-title">
                        <h3><strong>Add products</strong></h3>

                        <p>If you have an account with us, Please log in!</p>
                        <form action="{{url('admin/product')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                <label for="exampleInputEmail1">product Id</label>
                                <input type="text" name="productId" class="form-control" id="exampleInputEmail1" placeholder="productId">
                                <label for="exampleInputEmail1">product Name </label>
                                <input type="text" name="productName" class="form-control" id="exampleInputEmail1" placeholder="productName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">product Price</label>
                                <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1" placeholder="productPrice">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">product Description</label>
                                <textarea name="productDes" placeholder="enter product Description" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">product Image</label>
                                <input type="file" name="productImage" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>

                    </div>


                </div>
                <!-- cart content section start -->

            </div>
        </div>
    </div>
</div>



@endsection