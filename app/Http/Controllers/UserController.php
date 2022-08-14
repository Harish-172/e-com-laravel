<?php

namespace App\Http\Controllers;

use App\User;
use App\Cart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
       
        $user = User::where('email', $request->email)->first();
        if(!$user || ($user->password != $request->password)){
            return back()->with('errorMsg', "Your Email and Password is invalid") ;
        }
        else{
            session()->put('user', $user);
            $cart = Cart::where('user_id', $user->id)->get();
            $cartTotal = count($cart);
            return redirect('/');
            // return view('layouts.main', ['cartTotal'=>$cartTotal]);
            // return redirect('/')->with(['cartTotal'=>$cartTotal]);
        }
    }


    /**
     * logout
     */

    public function logout(){
        if(session()->has('user')){
            session()->forget('user');
        }      
        return view('login');  
    }

}
