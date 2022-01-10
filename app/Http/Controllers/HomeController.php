<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
            $data = Product::paginate(1);
            return view('user.home', compact('data'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {

            $data = Product::paginate(1);
            return view('user.home', compact('data'));
        }

    }

    public function search(Request $request)
    {
       $search = $request->search;

       if ($search == '') {
            $data = Product::paginate(1);
            return view('user.home', compact('data'));
       }

       $data = Product::where('title', 'Like', '%'. $search . '%')->get();

       return view('user.home', compact('data'));

    }

    public function addcart(Request $request, $id)
    {

       if (Auth::id()) {
           $user = auth()->user();

           $product = Product::find($id);

           $cart = new Cart();

           $cart->name = $user->name;

           $cart->phone = $user->phone;

           $cart->address = $user->address;

           $cart->product_title = $product->title;

           $cart->quantity = $request->quantity;

           $cart->price = $product->price;

           $cart->save();

            return redirect()->back()->with('message', 'Product added successfully');
       } else {
            return redirect('login');
        }
    }
}
