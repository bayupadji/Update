@extends("layout")
@section("konten")
<section class="login">
<div class="container">
    <img src="{{asset('img/logo.png') }}" alt="" class="logo mx-auto d-block">
    <div class="form">
    <p>SIGN <b>UP<b></p>
    <form>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
  </div>
  <br>
  <div class="form-group">
    <input type="email" class="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-enter password">
  </div>
  <br>
  <button type="submit" class="sbmt">Sign UP</button>
  <br>
  <br>
  <div class="su">
  <p>Have Account ?</p>
  <a href="#" class="su1">Sign IN</a>
</div>
</div>
</form>
    </div>
    </div>
</section>
@endsection