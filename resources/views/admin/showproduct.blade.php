<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper mt-3">
            <div class="container table-responsive" align="center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button class="close" type="button" data-dismiss="alert">x</button>
                    </div>
                @endif
                <table class="table table-striped text-center table-bordered">
                    <tr>
                        <th>S/L</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @foreach($data as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ substr($product->description, 0, 30) }}...</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td class="" align="center"><img class="img-fluid" src="productimage/{{ $product->image }}" alt="" style="height: 75px; width: 75px; border-radius: 0px !important;"></td>
                            <td>
                                <a class="btn-sm btn btn-primary" href="{{ url('updateview', $product->id) }}">Edit</a>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div class="d-flex justify-content-center">
                    {{ $data->links() }}
                </div>
            </div>

        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
