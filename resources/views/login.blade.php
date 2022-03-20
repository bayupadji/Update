@extends("layout")
@section('konten')
    <section class="login my-5">
        <div class="container">
            <div class="mobile-login">
                <img src="{{ asset('img/logo.png') }}" alt="" class="logo mx-auto d-block">
                <div class="form">
                    <p class="titleform">SIGN <b>IN<b></p>
                    <form class="form-input">
                        <div class="form-group">
                            <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Username">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" class="sbmt">Sign In</button>
                        <br>
                        <br>
                        <div class="smallttl">
                            <p class="fw-normal">Jika Belum Memiliki Akun<span class="fw-bold su1"><a href=""> Klik
                                        Di
                                        Sini</a></span></p>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
