<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contactus') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                @if(Route::has('login'))
                    @auth

                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('showcart') }}"><i class="fa fa-shopping-cart"></i>Cart[{{ $count }}]</a>
                    </li>
                        <x-app-layout>

                        </x-app-layout>
                    @else
                        <li class="nav-item ml-0 pl-0"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        @if(Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div style="padding: 100px; min-height: 75vh;">
        @if($count == null)
            <div class="alert alert-warning fixed-top text-center d-inline" style="margin-top: 150px; width: 400px; margin-left: 500px;">
                You did not attach to a product cart list!
            </div>
        @else
        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <form action="{{ url('order') }}" method="post">
                @csrf

                <tbody>
                @foreach($cart as $row)
                    <tr>
                        <td>{{ $row['product_title'] }} <input type="text" name="productname[]" id="" value="{{ $row->product_title }}" hidden></td>
                        <td>{{ $row['quantity'] }} <input type="text" name="quantity[]" id="" value="{{ $row->quantity }}" hidden></td>
                        <td>{{ $row['price'] }} <input type="text" name="price[]" id="" value="{{ $row->price }}" hidden></td>
                        <td><a onclick="return confirm('Are You Sure Delete?')" href="{{ url('deletecart', $row->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
        </table>

            <div align="center">
                <button onclick="return confirm('Are You Sure Confirm Order?')" type="submit" class="btn-sm btn-success btn">Confirm Order</button>
            </div>

        </form>
        @endif
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success fixed-top d-inline" style="margin-top: 88px; width: 400px; margin-left: 920px;">
            {{ session()->get('message') }}
            <button style="line-height: 0.8;" class="close" type="button" data-dismiss="alert">x</button>
        </div>
    @endif

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 Sixteen Clothing Co., Ltd.
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
