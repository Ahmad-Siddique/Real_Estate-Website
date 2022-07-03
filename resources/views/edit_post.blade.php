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
            background-image: url("images/singin-back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
           
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
        .gg{
            width: 100%;
        }
        .container input{
            font-weight: 300;
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



    <!-- Content -->
<!-- form -->

<form action="/editpost/{{$posts[0]->id}}" enctype="multipart/form-data" method="POST">
@csrf
        <div class="container  p-5 mt-4 mb-4" style="background-color: white;">
            <h1 class="text-center mb-lg-5">Edit a Post</h1>
            <div class="form-floating mb-3">
          <input type="text" name='title' value="{{$posts[0]->title}}" class="form-control" id="totalsqft" placeholder="are in sq.ft">
          <label for="totalsqft">Title</label>
          <span id="sqft" class=" text-danger font-weight-bold"></span>
        </div>


        <div class="form-floating mb-3">
          <input type="number" name='totalsqft' value="{{$posts[0]->totalsqft}}" class="form-control" id="totalsqft" placeholder="are in sq.ft">
          <label for="totalsqft">Total Square Feet</label>
          <span id="sqft" class=" text-danger font-weight-bold"></span>
        </div>

        <div class="form-floating mb-3">
          <input name="city" type="text" value="{{$posts[0]->city}}" class="form-control" id="city" placeholder="city name ">
          <label for="floatingInput">City</label>
          <span id="cityerror" class=" text-danger font-weight-bold"></span>
        </div>

        <div class="form-floating mb-3">
          <input name="location" type="text" value="{{$posts[0]->location}}" class="form-control" id="location" placeholder="Location name">
          <label for="floatingInput">Location</label>
          <span id="locationspan" class=" text-danger font-weight-bold"></span>
        </div>


        <div class="form-floating mb-3">
          <input name="address" type="text" value="{{$posts[0]->address}}" class="form-control" id="address" placeholder="Address name">
          <label for="floatingInput">Address</label>
          <span id="addresserror" class=" text-danger font-weight-bold"></span>
        </div>

        <div class="form-floating mb-3">
          <input name="price" type="number" value="{{$posts[0]->price}}" class="form-control" id="address" placeholder="Address name">
          <label for="floatingInput">Price</label>
          <span id="addresserror" class=" text-danger font-weight-bold"></span>
        </div>

        <div class="form-floating mb-3">
          <input name="phonenumber" type="number" value="{{$posts[0]->phonenumber}}" class="form-control" id="no" placeholder="phone number">
          <label for="floatingInput">Phone Number</label>
          <span id="phoneerror" class=" text-danger font-weight-bold"></span>
        </div>


              
              <button class="btn btn-dark mt-lg-4 gg" onclick="validation()">Submit</button>

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

                  <div class="col-lg-4 col-12 text-lg-center  mt-3">
                      <h3>Join Us</h3>
                      <a style="color:white;" href="www.facebook.com"><i class="fa fa-facebook-official" style="font-size:24px"></i></a>
                      <a style="color:white;" href="www.instagram.com"><i class="	fa fa-instagram" style="font-size:24px"></i></a>
                        <a style="color:white;" href="www.linkedin.com"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                          <a style="color:white;" href="www.snapchat.com"><i class="	fa fa-snapchat-square" style="font-size:24px"></i></a>
                        

                  </div>

                  <div class="col-lg-4 col-12 text-lg-center  mt-3">
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



      var totalsqft = document.getElementById('totalsqft')


var city = document.getElementById('city')
var location = document.getElementById('location')
var number = document.getElementById('no')
console.log(number.value)
var address = document.getElementById('address')
console.log(address.value)




var gg = true;



//number validation


if (/^[0-9]{11}$/.test(number.value) == false) {
  number.style.border = "1px solid red";
  document.getElementById("phoneerror").innerHTML = "Please enter valid phone number";
  gg = false

} else {
  number.style.border = "none";
  document.getElementById("phoneerror").innerHTML = "";
}
//address validation
if (address.value.length == "") {
  document.getElementById("address").style.border = "1px solid red";
  document.getElementById("addresserror").innerHTML = "address Name cannot be empty";

  gg = false
} else {
  document.getElementById("address").style.border = "none";
  document.getElementById("addresserror").innerHTML = "";
}

//total sqft validation
if (totalsqft.value.length == "") {
  document.getElementById("totalsqft").style.border = "1px solid red";
  document.getElementById("sqft").innerHTML = "Total Square Feet cannot be empty";

  gg = false
} else {
  document.getElementById("totalsqft").style.border = "none";
  document.getElementById("sqft").innerHTML = "";
}


// Location
if (location.value.length == "") {
  document.getElementById("location").style.border = "1px solid red";
  document.getElementById("locationspan").innerHTML = "Location cannot be empty";

  gg = false
} else {
  document.getElementById("location").style.border = "none";
  document.getElementById("locationspan").innerHTML = "";
}


//city validation
if (city.value.length == "") {
  document.getElementById("city").style.border = "1px solid red";
  document.getElementById("cityerror").innerHTML = " cityName cannot be empty";

  gg = false
} else {
  document.getElementById("city").style.border = "none";
  document.getElementById("cityerror").innerHTML = "";
}

 


if(gg==true){
return true
}
else{
event.preventDefault();
}






    }

</script>





  </body>
</html>