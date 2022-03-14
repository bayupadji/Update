<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/Style/css/bootstrap.min.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <title>Gerindra</title>
</head>

<body>
    <nav class="navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="" width="52" height="63"
                    class="logo d-inline-block align-text-top">
            </a>
            <span class="navbar-text">
                <a href="" class="btn tombol">Login</a>
                <!-- <button type="button" class="btn tombol">Login</button> -->
            </span>
        </div>
    </nav>
    <div class="row rowside" style="width: 100%;">
        <div class="col-sm-3 sidebar ">
            <div class="d-flex justify-content-center text-center my-3 ">
                <div class="">
                    <img class="profil" src="{{ asset('img/Foto.png') }}" alt="">
                    <p class="text-center fw-bold my-2">Haris Adiyatma</p>
                </div>
                {{-- <div class="col d-flex justify-content-center py-3">

                </div> --}}
            </div>

            {{-- <ul class="link">
                <li><a class=" text-dark" href="">Profile</a></li>
                <li><a class=" text-dark" href="">Document</a></li>
                <li><a class="text-dark" href="">Status Pendaftaran</a></li>
                <li><a class=" tomboldaftar btn" href="">Pengajuan Pendaftaran</a></li>
            </ul> --}}
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start px-4"
                id="menu">
                <li class="nav-item">
                    <a href="/profile" class="nav-link align-middle">
                        <i class="fs-4 bi-house"></i> <span class=" text-dark">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="/doc" class="nav-link align-middle">
                        </i> <span class=" text-dark">Document</span> </a>
                </li>
                <li>
                    <a href="/status" class="nav-link align-middle">
                        <span class=" text-dark">Status Pendaftaran</span> </a>
                </li>
                <li>
                    <a href="/pengajuan" class="nav-link  align-middle">
                        <span class=" tomboldaftar btn">Pengajuan Pendaftaran</span> </a>
                </li>
            </ul>
        </div>

        <div class="col">
            <div class="container">
                @yield('konten')
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start text-light" style="background-color: #212121">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-light" style="background-color: #212121">
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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <!-- <h6 class="text-uppercase fw-bold">Products</h6> -->
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
                        <p>
                            <a href="#!" class="text-light">MDBootstrap</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">MDWordPress</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Bootstrap Angular</a>
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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <script src="{{ asset('/Style/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/Style/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/style/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>

</body>

</html>
