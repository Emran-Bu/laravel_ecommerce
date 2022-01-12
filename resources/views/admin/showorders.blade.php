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
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table class="table table-striped text-center table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>S/L</th>
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $orders)
                            <tr>
                                <td>{{ $orders->id }}</td>
                                <td>{{ $orders->name }}</td>
                                <td>{{ $orders->phone }}</td>
                                <td>{{ $orders->address }}</td>
                                <td>{{ $orders->product_name }}</td>
                                <td>{{ $orders->price }}</td>
                                <td>{{ $orders->quantity }}</td>
                                <td>{{ $orders->status }}</td>
                                <td><a href="{{ url('updatestatus', $orders->id) }}" class="btn btn-success btn-sm">Delivered</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
