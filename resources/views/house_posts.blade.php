<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

    #customRange2 {
      background: color;
    }

    .filter {
      border: 2px solid black;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="zuzus">

    <!-- Navabar -->
         <!-- Navabar -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img width="200px"  src="images/logo.png"></a>
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
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="nav-item">  <a class="nav-link" href="/logout">Logout</a></li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >Log in</a>
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



    <!-- Filter -->



    <div class="row p-5">
      <h1 class="text-center">HOUSE PRICE POSTS</h1>
      <div class="col-lg-2 col-12 ">
        <div class="containter-fluid filter p-3">
          
          <h2 class="text-center mt-3 mb-3">Filter</h2>
          <form action="/houseposts" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="customRange2" class="form-label">Square Feet (100-2000)</label>
          <input type="range" name="range1" class="form-range" min="100" max="10000" id="customRange2">

          <label for="customRange2" class="form-label">Price (20 lac-4 crore)</label>
          <input type="range" name="range2" class="form-range" min="2000000" max="400000000000" id="customRange3">



          <!-- <h5 class="mt-3 mb-3">Type</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              House
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Bangalow
            </label>
          </div>

          <h5 class="mt-3 mb-3">City</h5>
          <select class="form-select" aria-label="Default select example">
            <option selected>None</option>
            <option value="1">Islamabad</option>
            <option value="2">Multan</option>
            <option value="3">Rawalpindi</option>
          </select> -->

          <button type="submit" class="btn btn-primary mt-3 mb-3">Filter</button>
          </form>
        </div>
      </div>
     





      <!-- Posts -->
      <div class="col 10">


        <div class="container-fluid p-lg-5 bg-light">


          <div class="row justify-content-center">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-12 col-12 mt-3 ">
              <div class="card mx-auto" style="width: 23rem;">
                <img width="300px" height="300px" src="{{$post->picture}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">{{$post->title}}</h5>

                  <p class="card-text"><strong>City:</strong>{{$post->city}}</p>
                  <p class="card-text"><strong>Locality:</strong> {{$post->location}}</p>
                  <p class="card-text"><strong>Address:</strong> {{$post->address}}</p>
                  <p class="card-text"><strong>Price:</strong>PKR. {{$post->price}} Cr</p>
                  <a href="/housedetails/{{$post->id}}" class="btn btn-primary">More Information</a>
                </div>
              </div>

            </div>

            @endforeach


          </div>
        </div>
      </div>
    </div>

  </div>
        <!-- Footer -->


        <Footer class="footer" style="color:white">
          <div class="container">
            <div class="row pt-3 pb-3 ">
              <div class="col-lg-4 col-12 mt-3">
                <h3>More About US</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
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
      function filtering(){

      
      var sqft=document.getElementById('customRange2').value
      var price=document.getElementById('customRange3').value
        $.post('127.0.0.1:8000/houseposts',
        {
          'sqft':sqft,
          'price':price
        }
        )
      }
    </script>
</body>

</html>