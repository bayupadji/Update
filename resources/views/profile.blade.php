@extends("Layout/main")
@section('konten')
    <!-- <div class="container-fluid">
                        <div class="row">
                            <div class="col-auto col-md-3 col-xl- px-sm-2 px-0 sidebar">
                                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline"><img class="profil mx-auto d-block" src="{{ asset('img/haris.jpg') }}" alt=""></span>
                                    </a>
                                    <p>Haris Adiyatma Farhan</p>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-dark">Profile</span>
                                            </a>
                                        </li> -->
    <!-- <li>
                                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                                </li>
                                            </ul>
                                        </li> -->
    <!-- <li>
                                            <a href="#" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                        </li>
                                        <li>
                                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                                </li>
                                            </ul>
                                        </li> -->
    <!-- <li>
                                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                                </li>
                                            </ul>
                                        </li> -->
    <!-- <li>
                                            <a href="#" class="nav-link px-0 align-middle">
                                                </i> <span class="ms-1 d-none d-sm-inline text-dark">Document</span> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0 align-middle">
                                                 <span class="ms-1  d-none d-sm-inline text-dark">Status Pendaftaran</span> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0 align-middle">
                                                <span class=" tombol ms-1 d-none d-sm-inline">Pengajuan Pendaftaran</span> </a>
                                        </li>
                                    </ul>
                                    <hr> -->
    <!-- <div class="dropdown pb-4">
                                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div> -->
    <!-- </div>
                            </div> -->
    <!-- content area -->
    <section class="mobile-profil">
        <div class="col py-3">
            <div class="row">
                <h3 class="header">Profile</h3>
                <div class="col-3 mx-3 cardprofile">
                    <form>
                        <div class="card">
                            <img src="{{ asset('img/Foto.png') }}" class="cardimg" alt="..." id="preview">
                            <div class="card-body">
                                <input type="file" class="btncard form-control" id="image">
                                <!-- <a href="#" class="btncard"></a> -->
                            </div>
                        </div>
                </div>
                <div class="col-6 g-3 textfield">
                    <!-- <div class="form-floating">
                                        <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                        <label for="floatingInput">Email address</label>
                                    </div> -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama">
                        <label for="floatingInput">Nama</label>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                                        <input type="date" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="tanggal">
                                    </div> -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="date" name="date">
                        <label for="floatingInput">Tanggal Lahir</label>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                                        <input type="tel" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon" name="telp">
                                    </div> -->
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingInput" placeholder="Nomor Telepon" name="telp">
                        <label for="floatingInput">Nomor Telepon</label>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                                                <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latar Belakang Pekerjaan">
                                            </div> -->
                    <div class="form-floating">
                        <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Alamat</label>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                                                <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organisai Yang  di Ikuti">
                                            </div> -->
                    <div class="form-floating">
                        <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Latar Belakang Pekerjaan</label>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                                                <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jaringan Togas/Tomas Yang di Kenal">
                                            </div> -->
                    <div class="form-floating">
                        <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Jaringan Togas/Tomas Yang di Kenal</label>
                    </div>
                    <br>
                    <button type="submit" class="sbmt">Simpan</button>
                    <br>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- </div>
                    </div> -->
@endsection
