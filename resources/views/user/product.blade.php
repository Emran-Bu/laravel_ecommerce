<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

            <form class="form-inline float-right mt-3" action="{{ url('search') }}" method="get">
                @csrf
                <input class="form-control form-control-sm mr-2" type="search" name="search" id="search" placeholder="search">
                <input type="submit" value="Search" name="submit" id="submit" class="btn btn-success btn-sm">
            </form>

          </div>
        </div>

        @foreach($data as $product)

        <div class="col-md-4">
          <div class="product-item" style="height: 400px">
            <a href="#"><img src="/productimage/{{ $product->image }}" alt="" style="height: 180px !important"></a>
            <div class="down-content">
              <a href="#"><h4>{{ $product->title }}</h4></a>
              <h6>$ {{ $product->price }}</h6>
              <p>{{ Str::substr($product->description, 0, 75)}} ...</p>

              <form class="form-inline justify-content-end" action="{{ url('addcart', $product->id) }}" method="post">
                  @csrf
                  <input class="form-control form-control-sm mr-3 w-25" type="number" min="1" name="quantity" id="quantity" required>
                  <input class="btn btn-sm btn-warning" type="submit" value="Add Cart" name="" id="">
              </form>

            </div>
          </div>
        </div>

        @endforeach



      </div>

    @if(method_exists($data, 'links'))

        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>

    @endif

    </div>
  </div>
