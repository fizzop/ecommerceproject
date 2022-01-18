@extends('master')
@section("content")
<div>

    <!-- slider-section-start -->
    <div class="main-slider-one main-slider-two slider-area">
        <div id="wrapper">
            <div class="slider-wrapper">
                <div id="mainSlider" class="nivoSlider">
                    <img src="images/yt.jpg" alt="main slider" title="#htmlcaption" />
                    <img src="images/uy.jpg" alt="main slider" title="#htmlcaption2" />
                    <img src="images/yi.jpg" alt="main slider" title="#htmlcaption3" />

                </div>
                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Camera's collection</h1>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="/">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left two-caption-text slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Drone's collection</h1>
                                <span>Starting at $65.00. Don’t miss out!</span>
                            </div>
                            <div class="one-p animated bounceInLeft">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section end -->
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Collection</h2>
                        <ul class="text-left">
                            <li><a href="/">Home </a></li>
                            <li><span> // </span>Collections</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop section end -->

    <div class="pages products-page section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="right-products">
                        <div class="row">
                            @foreach($product as $item)
                            <div class="grid-content">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="pro-type">
                                                <span>new</span>
                                            </div>
                                            <img href=" /detail/{{$item->id}}" height="350px" width="270px" src="{{ asset('uploads/images/'.$item->productImage) }}" alt="">
                                            <div class="actions-btn">
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-cart"></i></a>
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-eye"></i></a>
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a href="#">{{$item->productName}}</a></p>
                                            <span>${{$item->productPrice}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection