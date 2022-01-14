<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // product
    public function product()
    {
        if(Auth::id()){
            if (Auth::user()->usertype=='1') {
            return view('admin.product');
            } else {
                return redirect()->back();
            }

        } else {
            return redirect('login');
        }
    }

    public function uploadproduct(Request $request)
    {
        $data = new Product;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->des;

        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function showproduct()
    {
        if (Auth::id()){
            if (Auth::user()->usertype == '1'){
                $data = product::orderBy('id', 'desc')->paginate(4);
                return view('admin.showproduct', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }

    public function deleteproduct($id)
    {
        $data = product::find($id);

        $image = $data->image;

        $image = 'productimage/' . $image;

        if ($image) {
            unlink($image);
        }

        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }

    public function updateview($id)
    {
        if (Auth::id()){
            if (Auth::user()->usertype == '1'){
                $data = product::find($id);
                if(empty($data)){
                    return redirect()->back()->with('danger', 'Searching Went Wrong!');
                }
                return view('admin.updateview', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function updateproduct(Request $request, $id)
    {
        $data = product::find($id);

        $image = $request->file;

        $oldImage = $data->image;

        $oldImage = 'productimage/' . $oldImage;

        if ($image) {

            if ($oldImage) {
                unlink($oldImage);
            }

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $data->image = $imagename;

        }

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->des;

        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product updated successfully');
    }

    public function showorders()
    {

        if (Auth::id()){
            if (Auth::user()->usertype == '1'){
                $order = Order::orderBy('id', 'desc')->paginate(8);
                return view('admin.showorders', compact('order'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }

    public function deleteorder($id)
    {
        $deleteorder = Order::find($id);

        $deleteorder->delete();

        return redirect()->back()->with('message', 'Order deleted successfully');;
    }

    public function updatestatus($id)
    {
        $order = Order::find($id);

        $order->status = 'delivered';

        $order->save();

        return redirect()->back();
    }
}
