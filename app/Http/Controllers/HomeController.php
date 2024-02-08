<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    Public function redirect()
    {
    If (Auth::id())
    {
    if (Auth::user()->usertype =='0'){ 
       
        return view('user.home');
    }
    else {return view('admin.home');}
    }
    else
    {
         return redirect()-> back();
    }
    }
    Public function index()
{
    if (Auth::id())
    {
        return redirect('home');
    }
    else
    {
   
    return view('user.home');
    }
}
Public function cart()
{
    return view('user.cart');
}
Public function shop()
{
    return view('user.shop');
}
Public function about()
{
    return view('user.about');
}
Public function contact()
{
    return view('user.contact');
}
}
