<!DOCTYPE html>
<html lang="en">
  <head>
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
                <h1 class="title">Add Product</h1>
                <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                    @endif
                    @csrf
                    <div style="padding: 15px">
                        <label for="title">Product Title</label>
                        <input class="text-dark" type="text" name="title" id="title" placeholder="Give a product title" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="price">Product Price</label>
                        <input class="text-dark" type="number" name="price" id="price" placeholder="Give a price" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="des">Description</label>
                        <input class="text-dark" type="text" name="des" id="des" placeholder="Give a description" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="quantiity">Quantity</label>
                        <input class="text-dark" type="number" name="quantity" id="quantiity" placeholder="Give a quantiity" required>
                    </div>
                    <div style="padding: 15px">
                        <input type="file" name="file" id="file">
                    </div>
                    <div style="padding: 15px">
                        <input class="btn btn-primary" type="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
