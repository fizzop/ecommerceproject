@extends('master')
@section("content")
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>MY ORDERS</h2>
                    <ul class="text-left">
                        <li><a href="/">Home </a></li>
                        <li><span> // </span>My Orders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart content section start -->
<section class="pages cart-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive padding60">
                    <table class="wishlist-table text-center">

                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Delivery Status </th>
                                <th>Address </th>
                                <th>Payment Status </th>
                            </tr>
                        </thead>
                        @foreach($orders as $item)
                        <tbody>
                            <tr>

                                <td class="">
                                    <h4>{{$item->productName}}</h4>

                                </td>
                                <td>
                                    <h5>{{$item->status}}</h5>
                                </td>
                                <td>
                                    <h5>{{$item->address}}</h5>
                                </td>
                                <td>
                                    <strong>
                                        <h5>{{$item->payment_status}}</h5>
                                    </strong>
                                </td>




                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection