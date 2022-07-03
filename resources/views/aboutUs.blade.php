<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
       background-color: lightgrey;
    }
    .container input{
      font-weight: 300;
  }


    .caro {
      height: auto;
    }
    .zuzus {
      min-height: calc(100vh - 10rem);
    }
    .footer {
      position: relative;
      bottom: 0;
      background-color: black;
      width: 100%;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
    }
    p{
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
    }

    .noob{
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
    }

    .pic {
      width: 100%;
      height: 50%;
      height: auto;
      opacity: 40%;
      margin-right: 0%;
    }

    .zuzu {
      background-image: url("bg.jpeg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
    .logo{
            width: 200px;
        }
       
        
  </style>
</head>
<body>
<div class="zuzus">

<body class="">
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
                    @else
                    <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a></li>
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



<!-- main content -->
<div class="container-fluid zuzu">

  <div class="row">
    
    <div class="col-12 text-center mt-5">


      <h1>
        WHO ARE WE
      </h1>
      <p>
        The natural right of a person to own property as a concept can be seen as having <br>
        roots in Roman law as well as Greek philosophy.<br>
        The profession of appraisal can be seen as beginning <br>
        1500s as agricultural needs required land clearing and land preparation.<br>


      </p>
    </div>
  </div>
</div>



    



  <!-- cards -->

  
   
<div class="container mt-5 mb-4">

<h2 class="text-center" style="font-size: 40px;">Our Team</h2>

      <div class="row mt-5">


        <div class="col-6 gg ml-auto">

          <div class="card mx-auto" style="width: 18rem;">
            <img src="images/pic2.jpeg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title" style="color:black">M.Ahmad Siddique</h5>
              <p class="card-text" style="color:black">Some quick example text to build on the card title and make up the bulk of the card's
                content and  the bulk..</p>
              
            </div>
          </div>

        </div>

        <div class="col-6 wp  mr-auto">

          <div class="card mx-auto" style="width: 18rem;">
            <img src="images/pic.jpeg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title" style="color:black">Atifa Wahid</h5>
              <p class="card-text" style="color:black">Some quick example text to build on the card title and make up the bulk of the card's
                content and  the bulk.</p>
              
            </div>
          </div>

        </div>

      </div>
      </div>

    </div>










  </div>
</div>
</div>



</div>

<div class="container-fluid bg-secondary p-2 pb-4 ">
<div class="container mt-5">
  <h2 class="text-center" style="font-size: 40px;">Our Goal</h2>
  <div class="row mt-5">

    <div class="col-4" style="border-radius: 20px">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center" style="color:black">Provide Accuracy</h4>
          <p class="card-text" style="color:black">Some quick example text to build on the card title and make up the bulk of the card's
        content and  the bulk.</p>
          
        </div>
      </div>
    </div>

    <div class="col-4" style="border-radius: 20px">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center" style="color:black">Provide Reasonable Prices</h4>
          <p class="card-text" style="color:black">Some quick example text to build on the card title and make up the bulk of the card's
        content and  the bulk.</p>
     
        </div>
      </div>
    </div>

    <div class="col-4" style="border-radius: 20px">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center" style="color:black">Provide Prediction Prices</h4>
          <p class="card-text" style="color:black"> Some quick example text to build on the card title and make up the bulk of the card's
        content and  the bulk.</p>
         
        </div>
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
              <p class="noob">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
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
              <p class="noob">Building No. 4, Street No 5 <br>
              Bahria Town Phase 4, Rawalpindi </p>
          </div>

      </div>
  </div>
</Footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>