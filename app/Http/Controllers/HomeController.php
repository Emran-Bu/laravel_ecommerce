<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // redirect
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }else{
            return view('user.home');
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {

            $data = product::all();
            return view('user.home', compact('data'));
        }

    }
}
