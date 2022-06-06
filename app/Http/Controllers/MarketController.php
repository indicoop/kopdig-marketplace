<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function detailBlog()
    {
        return view('detail-blog');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function account()
    {
        return view('account');
    }

    public function order()
    {
        return view('order');
    }

    public function product()
    {
        return view('product');
    }

    public function shop()
    {
        return view('shop');
    }

    public function wishlist()
    {
        return view('wishlist');
    }
}
