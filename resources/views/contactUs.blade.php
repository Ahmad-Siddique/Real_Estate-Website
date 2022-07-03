<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

      background-image: url("images/back-dash.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      color: white;
    }

    .zuzus {
      min-height: calc(100vh - 10rem);
    }

    .caro {
      height: auto;
    }

    .footer {
      position: relative;
      bottom: 0;
      background-color: black;
      width: 100%;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
    }

    .logo {
      width: 200px;
    }






    .zuzu {

      background-repeat: no-repeat;
      background-size: cover;
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








    <!-- main content -->

    <div class="container-fluid zuzu">


      <div class="container mx-auto mt-5" style="width: 40%;">
        <h1><b>Contact us</b>
        </h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>


      <div class="container mt-5">
        <div class="row">
          <div class="col-4">

            <h4>ADDRESS</h4>
            <p>
              Ipsum is simply dummy text of <br>
              the printing and typesetting industry.
            </p>
            <h4>E-MAIL</h4>
            <p>
              Ipsum is simply dummy text of <br>
              the printing and typesetting industry.
            </p>
            <h4>PHONE</h4>
            <p>
              Ipsum is simply dummy text of <br>
              the printing and typesetting industry.
            </p>

          </div>

          <div class="offset-3 col-5">
            <!-- forms -->

            <div class="container mx-auto">
             
                <div class="mb-3">
                  <h1 class="text-center mb-lg-5">SEND US MESSAGE</h1>

                  <form action="/contactus" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="email" name='email' class="form-control " id="floatingInput" placeholder="name@example.com" color:black required>
                      <label for="floatingInput" style="color: black ;">Email address</label>
                      <span id="emailerror" class=" text-danger font-weight-bold">
                      </span>
                    </div>
                    <div class="form-floating">
                      <input type="text" name='message' class="form-control " id="name" placeholder="Name" required>
                      <label for="floatingInput" style="color: black ;">Message</label>
                      <span id="nameerror" class=" text-danger font-weight-bold">
                      </span>
                    </div>
                    <button type="submit" class="btn btn-dark mt-lg-4" onclick="validation()"> Send message
                    </button>
                  </form>



                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>


  <!-- <div class="row">
    <div class="col-12">
        <div>
            
        </div>
        <img src="bg.jpg"  class="img">
    </div>
    
</div> -->



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

  <!-- validation -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    function validation() {
      // Retrieving the values of form elements 


      var name = document.getElementById('name').value
      var email = document.getElementById('floatingInput').value
      var emailcheck = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
      var gg = true;

      // Validate email address


      if (emailcheck.test(email) == false) {

        document.getElementById("floatingInput").style.border = "1px solid red";
        document.getElementById("emailerror").innerHTML = "Please enter correct email";

        gg = false

      } else {
        document.getElementById("floatingInput").style.border = "none";
        document.getElementById("emailerror").innerHTML = "";
      }
    }



    if (name.value.length == "") {
      document.getElementById("name").style.border = "1px solid red";
      document.getElementById("nameerror").innerHTML = "Name cannot be empty";

      gg = false
    } else {
      document.getElementById("name").style.border = "none";
      document.getElementById("nameerror").innerHTML = "";
    }
  </script>
</body>

</html>