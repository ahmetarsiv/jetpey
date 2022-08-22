<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getShopHome()
    {
        return view('shop.dashboard');
    }

    public function getMyAccount()
    {
        return view('shop.account.index');
    }
}
