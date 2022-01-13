<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css')
    <style>
        .title{
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title text-dark">Update Product</h1>
                <form action="{{ url('updateproduct', $data->id) }}" method="post" enctype="multipart/form-data">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                    @endif
                    @csrf
                    <div style="padding: 15px">
                        <label for="title">Product Title</label>
                        <input class="text-dark" type="text" name="title" id="title" value="{{ $data->title }}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="price">Product Price</label>
                        <input class="text-dark" type="number" name="price" id="price" value="{{ $data->price }}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="des">Description</label>
                        <input class="text-dark" type="text" name="des" id="des" value="{{ $data->description }}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="quantity">Quantity</label>
                        <input class="text-dark" type="number" name="quantity" id="quantity" value="{{ $data->quantity }}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="image">Old Image</label>
                        <img src="productimage/{{ $data->image }}" alt="" height="100px" width="100px">
                    </div>
                    <div style="padding: 15px">
                        <label for="quantiity">Change Image</label>
                        <input type="file" name="file" id="file">
                    </div>

                    <div style="padding: 15px">
                        <input class="btn btn-primary" type="submit" name="submit" value="Update Product" id="submit">
                    </div>
                </form>
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
