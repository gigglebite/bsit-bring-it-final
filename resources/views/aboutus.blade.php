@extends('layouts.app')
@section('Title', 'About Us | Bring It!')
@section('content')
<html>
    <title>About Bring It!</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
        body {
            font-family: 'Product Sans', sans-serif;
        }
        img[alt="vision"] {
            width: 600px;
        }
        img[alt="mission"] {
            width: 500px;
        }
        img[alt="avatar"]{
            width: 200px;
        }
        img[alt="logo"]{
            margin-top: 30px;
        }

    </style>
    <body>
        <!-- Logo -->

        <h1 class="text-center"><img src="/images/bringitlogo1.png" alt="logo"></img></h1>
       
        <!-- Content -->

        <div class="bg-white py">
            <!-- Vision -->
            <div class="container py-2">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="font-weight-light">Vision</h2>
                        <p class="font-italic text-muted mb-4">The Bring It! Grocery Delivery's vision is to offer a platform where groceries are easy to purchase and have them delivered quickly to your doorstep.</p>
                    </div>
                <div class="col-lg-5 px-5 mx-auto"><img src="/images/vision.png" alt="vision"></div>
            </div>

            <!-- Mission -->
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto"><img src="/images/mission.png" alt="mission"></div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-light">Mission</h2>
                        <p class="font-italic text-muted mb-4">It is our mission to help people, especially those who are greatly affected by the pandemic, in reaching their necessities with a few taps and clicks in budget-friendly price ranges. The Bring It! Grocery Delivery System is adaptive as it will be receiving feedback from the customers and continually improve its services.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team -->       
        <div class="bg-light py-5">
            <div class="container py-5">
              <div class="row mb-4">
                <div class="col-lg-5">
                  <h2>Our team</h2>
                </div>
              </div>
          
              <div class="row text-center">
                <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/aleeya-01.png" alt="avatar" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Aleeya Candelaria</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/auds-01.png" alt="avatar" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Audriel Bustarde</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/gab-01.png" alt="avatar" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Gabriel Dy</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/ten-01.png" alt="avatar" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Kirsten Fernandez</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
            </div>
        </div>

        <footer class="bg-light pb-5">
            <div class="container text-center">
              <p class="font-italic text-muted mb-0">&copy; Copyrights Bring It! All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
@endsection