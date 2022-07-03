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
        body{
          
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;
            font-weight: 900;
            min-height: 100vh;
        
        }
        
        .zuzus {
          min-height: calc(100vh - 10rem);
        }

        .caro{
            height: auto;
        }
        .footer{
          bottom: 0;
            
          font-family: 'Roboto', sans-serif;
          font-weight: 300;
          bottom: 0;
          background-color: black;
          width: 100%;
        }
    </style>
  </head>
 <body>
    
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



    



    <!-- Carousal -->

    <div id="carouselExampleCaptions" class="carousel slide caro" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/house1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Home</h2>
              <p>
                Home is a safe haven and a comfort zone. A place to live with our families and pets and enjoy with friends.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/house2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Bangalow</h2>
              <p>Bangalow is a lovely Hinterland town that has grown in popularity over the last 10 years.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images//house3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Availability</h2>
              <p>All homes and bangalows are available</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>





      <!-- Popular Sales -->


      <div class="container-fluid p-lg-5 bg-light">
          <h2 class="text-center m-lg-5">Popular Selling Houses</h2>

        <div class="row justify-content-center">
          
            <div class="col-lg-4 col-md-12 col-12 ">
          <div class="card mx-auto" style="width: 25rem;">
            <img width="200" height="150" src="{{$posts[0]->picture}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{$posts[0]->title}}</h5>
              
              <p class="card-text"><strong>City:</strong> {{$posts[0]->city}}</p>
              <p class="card-text"><strong>Locality:</strong> {{$posts[0]->location}}</p>
              <p class="card-text"><strong>Address:</strong> {{$posts[0]->address}}</p>
              <p class="card-text"><strong>Price:</strong> {{$posts[0]->price}}</p>
              <a href="/housedetails/{{$posts[0]->id}}" class="btn btn-primary">See Further Details</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-12 col-12 ">
          <div class="card mx-auto" style="width: 25rem;">
          <img width="200" height="150" src="{{$posts[1]->picture}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{$posts[0]->title}}</h5>
              
              <p class="card-text"><strong>City:</strong> {{$posts[1]->city}}</p>
              <p class="card-text"><strong>Locality:</strong> {{$posts[1]->location}}</p>
              <p class="card-text"><strong>Address:</strong> {{$posts[1]->address}}</p>
              <p class="card-text"><strong>Price:</strong> {{$posts[1]->price}}</p>
              <a href="/housedetails/{{$posts[1]->id}}" class="btn btn-primary">See Further Details</a>
            </div>
          </div>

        </div>

          <div class="col-lg-4 col-md-12 col-12 ">
          <div class="card mx-auto" style="width: 25rem;">
          <img width="200" height="150" src="{{$posts[2]->picture}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{$posts[2]->title}}</h5>
              
              <p class="card-text"><strong>City:</strong> {{$posts[2]->city}}</p>
              <p class="card-text"><strong>Locality:</strong> {{$posts[2]->location}}</p>
              <p class="card-text"><strong>Address:</strong> {{$posts[2]->address}}</p>
              <p class="card-text"><strong>Price:</strong> {{$posts[2]->price}}</p>
              <a href="/housedetails/{{$posts[2]->id}}" class="btn btn-primary">See Further Details</a>
            </div>
          </div>

      </div>
    </div>

    </div>




    <!-- About Us -->

    <div class="container-fluid bg-secondary pb-5" >
        <div class="container " >
        <h1 class="text-center p-5" style="color: black;">About US</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <img src="images/about-main.jpg" style="width:100%;margin:0px" alt="">
            </div>

            <div class="col-lg-6 col-12">
                <h2>Our Goal</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>

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
      

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>

      
    </script>

  </body>
</html>