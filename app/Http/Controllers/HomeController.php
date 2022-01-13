<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // redirect
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }else{
            $data = Product::orderBy('id', 'asc')->paginate(6);

            // total cart
            $user = auth()->user();
            $count = Cart::where('phone', $user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {

            $data = Product::paginate(6);

            return view('user.home', compact('data'));
        }

    }

    public function search(Request $request)
    {
       $search = $request->search;

       if (Auth::id()) {
        // $user = auth()->user();
        // $count = Cart::where('phone', $user->phone)->count();
        // return view('user.about', compact('count'));

            if ($search == '') {
                $data = Product::paginate(3);
                $user = auth()->user();
                $count = Cart::where('phone', $user->phone)->count();
                return view('user.home', compact('data', 'count'));
            }

            // total cart
            $user = auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            $data = Product::where('title', 'Like', '%'. $search . '%')->get();

            return view('user.home', compact('data', 'count'));


        } else {
            return redirect('login');
        }


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

    // show cart
    public function showcart()
    {
        $user = auth()->user();

        $cart = Cart::where('phone', $user->phone)->get();

        // total cart
        $count = Cart::where('phone', $user->phone)->count();

        return view('user.showcart', compact('count', 'cart'));
    }

    // delete cart
    public function deletecart($id)
    {
        $cart = Cart::find($id);

        $cart->delete();

        return redirect()->back()->with('message', 'Product Removed Successfully');
    }

    // order
    public function confirmorder(Request $request)
    {
        $user = auth()->user();

        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productname as $key => $productname) {

            $order = new Order();

            $order->product_name = $request->productname[$key];

            $order->quantity = $request->quantity[$key];

            $order->price = $request->price[$key];

            $order->name = $name;

            $order->phone = $phone;

            $order->address = $address;

            $order->status = 'not delivered';

            $order->save();

        }

        DB::table('carts')->where('phone', $phone)->delete();

        return redirect()->back()->with('message', 'Ordered Successfully');
    }

    // page add
    public function about()
    {
        if (Auth::id()) {
            $user = auth()->user();
            $count = Cart::where('phone', $user->phone)->count();
            return view('user.about', compact('count'));
        } else {
            return redirect('login');
        }
    }

    public function contactus()
    {
        if(Auth::id()){
            $user = auth()->user();
            $count = Cart::where('phone', $user->phone)->count();
            return view('user.contactus', compact('count'));
        } else {
            return redirect('login');
        }
    }
}
