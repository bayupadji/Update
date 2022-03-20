@extends('Admin/index')
@section('konten')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">User</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="col py-3">
                            <div class="row">
                                <h3 class="header">Profile</h3>
                                <div class="col-3 mx-3">
                                    <form>
                                        <div class="card" style="width: 100%;">
                                            <img src="{{ asset('img/Foto.png') }}" class="cardimg" alt="..."
                                                id="preview">
                                            <div class="card-body">
                                                <input type="file" class="btncard form-control" id="image">
                                                <!-- <a href="#" class="btncard"></a> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="col-6 mx-5 g-3">


                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama"
                                            name="nama">
                                        <label for="floatingInput">Nama</label>
                                    </div>

                                    <br>

                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" placeholder="date"
                                            name="date">
                                        <label for="floatingInput">Tanggal Lahir</label>
                                    </div>
                                    <br>

                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingInput"
                                            placeholder="Nomor Telepon" name="telp">
                                        <label for="floatingInput">Nomor Telepon</label>
                                    </div>
                                    <br>

                                    <div class="form-floating">
                                        <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Alamat</label>
                                    </div>
                                    <br>

                                    <div class="form-floating">
                                        <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Latar Belakang Pekerjaan</label>
                                    </div>
                                    <br>

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
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
