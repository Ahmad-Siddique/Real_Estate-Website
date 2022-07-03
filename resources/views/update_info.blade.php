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
        html{
            height: 100%;
        }
        body{
           
                margin: 0px;
                padding: 0px;
                font-family: 'Roboto', sans-serif;
                font-weight: 900;
                background-image: url("images/singin-back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
                
            
        }
        .zuzus{
            min-height : calc(100vh - 10rem);
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




          <form onsubmit="return validation()" action="/dashboard.html">
        <div class="container  p-5 mt-4" style="background-color: white;">
            <h1 class="text-center mb-lg-5">UPDATE INFORMATION</h1>
            <div class="form-floating mb-3">
                <input  type="email" class="form-control" id="floatingInput"  placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                <span id="emailerror" class=" text-danger font-weight-bold"></span>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control"  id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <span id="passerror" class=" text-danger font-weight-bold"></span>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control"  id="floatingPassword1" placeholder="Password">
                <label for="floatingPassword">Re-Type Password</label>
                <span id="repasserror" class=" text-danger font-weight-bold"></span>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control"  id="name" placeholder="write your name here ">
                <label for="floatingPassword">Full Name</label>
                <span id="nameerror" class=" text-danger font-weight-bold"></span>
              </div>

              <div class="form-floating ">
                <input type="number" class="form-control"  id="no" placeholder="write your phone number here ">
                <label for="floatingPassword">Phone Number</label>
                <span id="phoneerror" class=" text-danger font-weight-bold"></span>
              </div>
              <button class="btn btn-dark mt-lg-4" onclick="validation()" >Update</button>

        </div>
    </div>
  </form>
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
      

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  
    <script>

      function validation() {
  
  
        var email = document.getElementById('floatingInput').value
      var password = document.getElementById('floatingPassword').value
  
  
  
      var re_pass = document.getElementById('floatingPassword1')
      console.log(re_pass.value)
  
      var name = document.getElementById('name')
      console.log(name.value)
  
      var number = document.getElementById('no')
      console.log(number.value)
  
  
  
      console.log(email)
      var emailcheck =  /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
      var passcheck = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
  
      var gg=true;
  
      if (emailcheck.test(email)==false  ) {
  
        document.getElementById("floatingInput").style.border="1px solid red";
        document.getElementById("emailerror").innerHTML="Please enter correct email";
        
        gg=false
        
      }
      else{
        document.getElementById("floatingInput").style.border="none";
        document.getElementById("emailerror").innerHTML="";
      }
  
      if(passcheck.test(password)==false){
        document.getElementById("floatingPassword").style.border="1px solid red";
        document.getElementById("passerror").innerHTML="Password should contain minimun 6 characters including special characters";
        gg=false
      }
      else{
        document.getElementById("floatingPassword").style.border="none";
        document.getElementById("passerror").innerHTML="";
      }
  
      if(name.value.length==""){
        document.getElementById("name").style.border="1px solid red";
        document.getElementById("nameerror").innerHTML="Name cannot be empty";
  
        gg=false
      }
  
  
      else{
        document.getElementById("name").style.border="none";
        document.getElementById("nameerror").innerHTML="";
      }
  
      if(re_pass.value!=password){
        re_pass.style.border="1px solid red";
        document.getElementById("repasserror").innerHTML="Password is not same";
        gg=false
      }
      else{
        re_pass.style.border="none";
        document.getElementById("repasserror").innerHTML="";
      }
  
  
      if(/^[0-9]{11}$/.test(number.value)==false){
        number.style.border="1px solid red";
        document.getElementById("phoneerror").innerHTML="Please enter valid phone number";
        gg=false
        
      }
      else{
        number.style.border="none";
        document.getElementById("phoneerror").innerHTML="";
      }
  
      return gg
  
  
  
  
      }
  
  
    </script>
  
  </body>
</html>