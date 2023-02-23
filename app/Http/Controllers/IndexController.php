<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function livewire()
    {
        return view('livewire.lines');
    }

    public function index()
    {
        return view('index');
    }

    public function shop()
    {

    }

    public function checkout()
    {
        return view('checkout');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function profile()
    {
        return view('profile');
    }
}
