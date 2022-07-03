<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      background-image: url("images/singin-back.jpg");


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
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                      </li>
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





    <!-- House Price Prediction Model -->



    <div class="container p-5 mt-3 mb-3" style="background-color: white;">
      <h1 class="text-center mb-4">House Price Prediction Model</h1>
      <p class="text-center">Enter the details of the house to predict the price of the house</p>

      <form onsubmit="event.preventDefault()" action="">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="no" placeholder="name@example.com" required>
          <label for="no">Number of Bedrooms</label>
          <span id="bederror" class=" text-danger font-weight-bold"></span>
        </div>

        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="bathno" placeholder="name@example.com" required>
          <label for="bathno">Number of Bathrooms</label>

          <span id="batherror" class=" text-danger font-weight-bold">
        </div>


        <select class="location" id="uiLocations" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>None</option>
          <option value="1">Rawalpindi</option>
          <option value="2">Islamabad</option>
          <option value="3">GGWP</option>
        </select>







        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="sq" placeholder="name@example.com" required>
          <label for="sq">Square Feet</label>
          <span id="sqerror" class=" text-danger font-weight-bold">
        </div>

        <button type="submit" class="btn btn-dark" onclick="validation()">Submit</button>
      </form>

      <h2 id="uiEstimatedPrice"></h2>
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
    function validation() {
      var Bedrooms = document.getElementById('no')
      console.log(Bedrooms.value)
      var Bathrooms = document.getElementById('bathno')
      console.log(Bathrooms.value)



      var SquareFeet = document.getElementById('sq')
      console.log(SquareFeet.value)
      var gg = true



      //bedroomnumber validation


      if (Bedrooms.value == "" || Bedrooms.value < 1) {
        Bedrooms.style.border = "1px solid red";
        document.getElementById("bederror").innerHTML = "Please enter valid bedrooms";
        gg = false

      } else {
        Bedrooms.style.border = "none";
        document.getElementById("bederror").innerHTML = "";
      }
      //bathroomnumber validation


      if (Bathrooms.value == "" || Bathrooms.value < 0) {
        Bathrooms.style.border = "1px solid red";
        document.getElementById("batherror").innerHTML = "Please enter valid bathrooms";
        gg = false

      } else {
        Bedrooms.style.border = "none";
        document.getElementById("batherror").innerHTML = "";
      }









      if (SquareFeet.value == "" || SquareFeet.value < 1) {
        SquareFeet.style.border = "1px solid red";
        document.getElementById("sqerror").innerHTML = "Please enter valid number";
        gg = false

      } else {
        SquareFeet.style.border = "none";
        document.getElementById("sqerror").innerHTML = "";
      }

      if (gg == true) {
        onClickedEstimatePrice()
        event.preventDefault();
      }
      return gg


    }







    function getBathValue() {
      return document.getElementById('bathno').value
      // Invalid Value
    }

    function getBHKValue() {
      return document.getElementById('no').value
    }

    function onClickedEstimatePrice() {
      console.log("Estimate price button clicked");
      var sqft = document.getElementById('sq');
      var bhk = getBHKValue();
      var bathrooms = getBathValue();
      var location = document.getElementById("uiLocations");
      var estPrice = document.getElementById("uiEstimatedPrice");

      var url = "http://127.0.0.1:5000/predict_home_price";


      $.post(url, {
        total_sqft: parseFloat(sqft.value),
        bhk: bhk,
        bath: bathrooms,
        location: location.value
      }, function(data, status) {
        console.log(typeof(data.estimated_price))
        console.log(data.estimated_price);
        estPrice.innerHTML = "<h2> Rs: " + (data.estimated_price * 100).toString() + "0";
        console.log(status);
      });
    }

    function onPageLoad() {
      console.log("document loaded");
      var url = "http://127.0.0.1:5000/get_location_names"; // Use this if you are NOT using nginx which is first 7 tutorials

      $.get(url, function(data, status) {
        console.log("got response for get_location_names request");
        if (data) {
          var locations = data.locations;
          var uiLocations = document.getElementById("uiLocations");
          $('#uiLocations').empty();
          for (var i in locations) {
            var opt = new Option(locations[i]);
            $('#uiLocations').append(opt);
          }
        }
      });
    }

    window.onload = onPageLoad;
  </script>

</body>

</html>