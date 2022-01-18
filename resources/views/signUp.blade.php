@extends('master')
@section("content")


<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Register</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/loginimg.jpg" height="550px" width="550px" alt="main slider" title="#htmlcaption" />
            </div>
            <div class="col-sm-6">
                <div class="main-input padding60 new-customer">
                    <div class="log-title">
                        <h3><strong>new customers</strong></h3>
                    </div>
                    <div class="custom-input">
                        <form action="/signUp" method="POST">
                            <div class="form-group">
                                @csrf
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                            </div>
                            <div class="submit-text">
                                <button type="submit" class="btn btn-default">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login content section end -->



@endsection