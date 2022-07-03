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
            display: flex;
            
            flex-direction: column;
            background-image: url("images/back-dash.jpg");
           
            color: white;
            
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .zuzus {
            min-height: calc(100vh - 10rem);
          }

        .caro {
            height: auto;
        }

        .footer {
            
            
            
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
          
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

                        <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a></li>
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

<div class="container " >
    <h1 class="text-center mt-5">Dashboard</h1>

    <h3>Hey Ahmad, Nice to see you</h3>
   

   <div class="row">

    <div class="col-lg-4 col-12 mt-5">
        <a href="/houseposts" style="text-decoration: none; color:black;" >
            <div class="row px-5 pt-3 text-center " style="width: 20rem;; border-radius:10px;background-color:white; box-shadow: 5px 10px 10px black;">
                <div class="col-12">
                    <i class="fa fa-cog" style="font-size:40px;"></i>
                </div>

            <div class="col-12">
                <h3>See Posts</h3>
                <p>Click to see all posts of the houses</p>
            </div>

        
        </div>
        </a>
    </div>

   
    <div class="col-lg-4 col-12 mt-5">
        <a href="/createpost" style="text-decoration: none; color:black;" >
        <div class="row px-5 pt-3 text-center " style="width: 20rem; border-radius:10px;background-color:white; box-shadow: 5px 10px 10px black;">

            <div class="col-12">
                <i class="fa fa-cog" style="font-size:40px;"></i>
            </div>

            <div class="col-12">
                <h3>Create Post</h3>
                <p>Enter the credentials to create the post</p>
            </div>

            

        
        </div>
    </a>
    </div>









        <div class="col-lg-4 col-12 mt-5">
            <a href="/yourposts" style="text-decoration: none; color:black;" >
                <div class="row px-5 pt-3 text-center " style="width: 20rem;; border-radius:10px;background-color:white; box-shadow: 5px 10px 10px black;">
                    <div class="col-12">
                        <i class="fa fa-cog" style="font-size:40px;"></i>
                    </div>

                <div class="col-12">
                    <h3>Your Posts</h3>
                    <p>Enter the credentials to delete the post</p>
                </div>

            
            </div>
        </a>
        </div>




    </div>
</div>
</div>
<!-- Footer -->


<Footer class="footer" style="color:white">
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-lg-4 col-12  mt-3">
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>