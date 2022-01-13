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
                                <td><a href="{{ url('updatestatus', $orders->id) }}" class="btn btn-success btn-sm">Delivered</a>
                                @if($orders->status == 'not delivered')
                                <a onclick="alert('Do Not Product Delivered!')" href="#" class="btn btn-danger btn-sm">Delete</a></td>
                                @else
                                <a href="{{ url('deleteorder', $orders->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(method_exists($order, 'links'))
                    <div class="d-flex justify-content-center">
                        {{ $order->links() }}
                    </div>
                @endif
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
