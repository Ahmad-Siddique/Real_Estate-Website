<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
  <title>Real Estate</title>

  <style>
    body {

      margin: 0px;
      padding: 0px;
      font-family: 'Roboto', sans-serif;
      font-weight: 900;
      min-height: 100vh;



    }

    .zuzus {
      min-height: calc(100vh - 10rem);
    }


    .caro {
      height: auto;
    }

    .footer {
      bottom: 0;

      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      bottom: 0;
      background-color: black;
      width: 100%;
    }















    body {

      background-color: #f5f5f5
    }

    .hedding {
      font-size: 20px;
      color: #ab8181;
    }

    .main-section {

      margin-left: auto;
      margin-right: auto;

    }

    .left-side-product-box img {
      width: 100%;
    }

    .left-side-product-box .sub-img img {
      margin-top: 5px;
      width: 83px;
      height: 100px;
    }

    .right-side-pro-detail span {
      font-size: 15px;
    }

    .right-side-pro-detail p {
      font-size: 25px;
      color: #a1a1a1;
    }

    .right-side-pro-detail .price-pro {
      color: #E45641;
    }

    .right-side-pro-detail .tag-section {
      font-size: 18px;
      color: #5D4C46;
    }

    .pro-box-section .pro-box img {
      width: 100%;
      height: 200px;
    }

    @media (min-width:360px) and (max-width:640px) {
      .pro-box-section .pro-box img {
        height: auto;
      }
    }
  </style>
</head>

<body>


  <div class="zuzus">
    <!-- Navabar -->
    <!-- Navabar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img width="200px" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/homepriceprediction">Price Prediction</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/aboutus">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/contactus">Contact Us</a>
            </li>



          </ul>



          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right ">






            @if (Route::has('login'))

            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">  <a class="nav-link" href="/logout">Logout</a></li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Log in</a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            @endauth

            @endif
          </ul>
        </div>
      </div>
    </nav>





    </ul>
  
 
  </nav>


  <!-- Details -->


  <div class="container-fluid m-5">
    <div class="col-lg-8 border p-3 main-section bg-white">
      @foreach($posts as $post)
      <div class="row m-0">
        <div class="col-lg-4 left-side-product-box pb-3">
          <img src="{{$post->picture}}" class="border p-3" alt="...">

        </div>

        <div class="col-lg-8">
          <div class="right-side-pro-detail border p-3 m-0">
            <div class="row">
              <div class="col-lg-12">
                <span>House</span>
                <p class="m-0 p-0">{{$post->title}}</p>
              </div>
              <div class="col-lg-12">
                <p class="m-0 p-0 price-pro">{{$post->price}}</p>
                <hr class="p-0 m-0">
              </div>
              <div class="col-lg-12 pt-2">
                <h5>{{$post->address}}</h5>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt</span>
                <hr class="m-0 pt-2 mt-2">
              </div>
              <div class="row mt-3 pt-2">
                <div class="col-6">
                  <p class="m-0 " style="font-size: 17px; color: black">City: {{$post->city}}</p>
                </div>

                <div class="col-6">
                  <p class="m-0 " style="font-size: 17px; color: black">Total Square Feet: {{$post->totalsqft}}</p>
                </div>
                <hr class="m-0 pt-2 mt-2">
              </div>

              <div class="row mt-3 pt-2">
                <div class="col-6">
                  <p class="m-0 " style="font-size: 17px; color:black">Phone Number: {{$post->phonenumber}}</p>
                </div>

                <div class="col-6">
                  <p class="m-0 " style="font-size: 17px; color:black">Email Address: usman@gmail.com</p>
                </div>
                <hr class="m-0 pt-2 mt-2">
              </div>

              <div class="col-lg-12 mt-3">
                <div class="row">
                  <div class="col-lg-12 pb-2">
                    <a href="#" class="btn btn-dark w-100">Contact Owner</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
  </div>



  <!-- Footer -->


  <Footer class="footer" style="color:white">
    <div class="container">
      <div class="row pt-3 pb-3">
        <div class="col-lg-4 col-12 mt-3">
          <h3>More About US</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. </p>
        </div>

        <div class="col-lg-4 col-12 text-lg-center mt-3">
          <h3>Join Us</h3>
          <a style="color:white;" href="www.facebook.com"><i class="fa fa-facebook-official" style="font-size:24px"></i></a>
          <a style="color:white;" href="www.instagram.com"><i class="	fa fa-instagram" style="font-size:24px"></i></a>
          <a style="color:white;" href="www.linkedin.com"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
          <a style="color:white;" href="www.snapchat.com"><i class="	fa fa-snapchat-square" style="font-size:24px"></i></a>


        </div>

        <div class="col-lg-4 col-12 text-lg-center mt-3">
          <h3>Address</h3>
          <p>Building No. 4, Street No 5 <br>
            Bahria Town Phase 4, Rawalpindi </p>
        </div>

      </div>
    </div>
  </Footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>


  </script>
</body>

</html>