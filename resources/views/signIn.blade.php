@extends('master')
@section("content")


<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Sign In</h2>
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
                <div class="main-input padding60">
                    <div class="log-title">
                        <h3><strong>registered customers</strong></h3>
                    </div>
                    <div class="login-text">
                        <div class="custom-input">
                            <p>If you have an account with us, Please log in!</p>
                            <form action="/signIn" method="POST">
                                <div class="form-group">
                                    @csrf
                                    <label for="exampleInputEmail1"> Email </label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                                </div>
                                <div class="submit-text">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="images/loginimg.jpg" height="550px" width="550px" alt="main slider" title="#htmlcaption" />
            </div>
        </div>
    </div>
</section>
<!-- login content section end -->


@endsection