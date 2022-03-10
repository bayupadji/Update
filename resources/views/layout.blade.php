<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/Style/css/bootstrap.min.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <title>Gerindra</title>
</head>

<body>
    <nav class="navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="" width="52" height="63" class="logo d-inline-block align-text-top">
            </a>
            <span class="navbar-text">
                <a href="login" class="btn tombol ">Login</a>
            </span>
        </div>
    </nav>
    @yield('konten')
    <footer
          class="text-center text-lg-start text-light"
          style="background-color: #212121"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-light"
             style="background-color: #212121"
             >
      <!-- Left -->
      <div class="me-5">
        <!-- <span>Get connected with us on social networks:</span> -->
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <!-- <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a> -->
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <!-- <h6 class="text-uppercase fw-bold">Company name</h6> -->
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #212121; height: 2px"
                />
            <p>
            24 Shipley St.Arvada, CO 80003
            </p>
            
            <p>
            24 Shipley St.Arvada, CO 80003
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <!-- <h6 class="text-uppercase fw-bold">Products</h6> -->
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #212121; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">MDBootstrap</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-light">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-light">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-light">Help</a>
            </p>
          </div> -->
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <!-- <h6 class="text-uppercase fw-bold">Contact</h6> -->
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #212121; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
    <!-- Remove the container if you want to extend the Footer to full width. -->

<!-- End of .container -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <script src="{{ asset('/Style/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/style/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>

</html>