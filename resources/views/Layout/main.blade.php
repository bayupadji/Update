<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.14/js/all.js"
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

    <footer class="text-center text-lg-start text-light pb-5" style="background-color: #212121">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-light" style="background-color: #212121">
            <!-- Left -->
            <div class="me-5">
                <!-- <span>Get connected with us on social networks:</span> -->
            </div>
            <!-- Left -->

            <!-- Right -->

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
                        <h5>
                            KANTOR DPD GERINDRA
                        </h5>
                        <P>Jl. Kanguru Raya, Gayamsari, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50248</P>
                        <p>(024) 76412180</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 col-rows-5">
                        <!-- Links -->
                        <!-- <h6 class="text-uppercase fw-bold">Products</h6> -->
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #212121; height: 2px" />
                        <section>
                            <div class="d-flex justify-content-center align-item-center ">
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">
                                        {{-- <i class="fab fa-facebook-f"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">
                                        {{-- <i class="fab fa-facebook-f"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white">
                                        {{-- <i class="fab fa-facebook-f"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white ">
                                        {{-- <i class="fab fa-facebook-f"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="justify-content-center align-item-center mx-2">
                                    <a href="" class="text-white">
                                        {{-- <i class="fab fa-facebook-f"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </section>
                        <div class="copy">
                            <p><span class="px-1">©Copyright2022</span><b>GERINDRA<span
                                        class="px-2">JATENG<span></b></P>
                        </div>
                        <!-- <ul class="sosmed">
                            <li></li>
                                <a href="" class="text-white me-4">
                                    {{-- <i class="fab fa-facebook-f"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        viewBox="0 0 50 50" style=" fill:#ffffff;">
                                        <path
                                            d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        viewBox="0 0 30 30" style=" fill:#ffffff;">
                                        <path
                                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z">
                                        </path>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white me-4">
                                    {{-- <i class="fab fa-youtube"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        viewBox="0 0 50 50" style=" fill:#ffffff;">
                                        <path
                                            d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 30.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 30.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 30.5 30.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white me-4">
                                    {{-- <i class="fab fa-instagram"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        viewBox="0 0 30 30" style=" fill:#ffffff;">
                                        <path
                                            d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-white me-4">
                                    {{-- <i class="fab fa-tiktok"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        viewBox="0 0 50 50" style=" fill:#ffffff;">
                                        <path
                                            d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul> -->


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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.070532923704!2d110.44651311477337!3d-7.000976394942679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c933d6636c3%3A0xca1c8f002f19bcce!2sKANTOR%20DPD%20GERINDRA%20JATENG!5e0!3m2!1sen!2sid!4v1647520860723!5m2!1sen!2sid"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
