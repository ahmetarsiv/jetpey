<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        $type = Auth::user()->type;
        switch($type) {
            case 1:
                return redirect()->route('admin.dashboard');
            case 2:
                return redirect()->route('customer.dashboard');
        }
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
