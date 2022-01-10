<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    // product
    public function product()
    {
        return view('admin.product');
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
        $data = product::paginate(1);
        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }

    public function updateview($id)
    {
        $data = product::find($id);
        return view('admin.updateview', compact('data'));
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
}
