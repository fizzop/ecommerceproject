<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\order;
use App\Models\cart;

use Session;

class productController extends Controller
{
    //
    public function product(Request $request)
    {
        $product = new product;
        $product['productId'] = $request->productId;
        $product['productName'] = $request->productName;
        $product['productPrice'] = $request->productPrice;
        $product['productDes'] = $request->productDes;

        if ($request->hasfile('productImage')) {
            $file = $request->file('productImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/images/', $filename);
            $product->productImage = $filename;
        }
        $product->save();
        return redirect()->back();
    }
    public function get_product()
    {
        $product = DB::table('products')->get();
        return view('home')->with('product', $product);
    }
    public  function detail($id)
    {
        $product = product::find($id);
        return view('product/productDetail')->with('product', $product);
    }
    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('user')) {

            $cart = new cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/sign_in');
        }
    }

    public function search(Request $request)
    {
        $product = product::where('productName', 'like', '%' . $request->input('query') . '%')
            ->get();
        return view('product/search', ['products' => $product]);
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }
    public function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')
            ->get();

        return view('product/cartlist', ['products' => $products]);
    }
    function removecart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderPage()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.productPrice');

        return view('product/orderPage', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('product/myorders', ['orders' => $orders]);
    }

    public function about()
    {
        return view('about');
    }
}
