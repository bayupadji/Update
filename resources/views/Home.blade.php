@extends("layout")
@section('konten')
    <section class="user1">
        <div class="container">
            <img class="profil d-flex mx-auto align-items-center justify-content-center" src="{{ asset('img/Foto.png') }}"
                alt="">
            <div class="db">
                <p class="fw-bold">Haris Adiyatma Farhan</p>
            </div>
            <!-- {{-- <div class="container1">
                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Profil</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/profile"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Dokumen</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/doc"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Pendaftaran</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/pengajuan"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Status Pendaftaran</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/status"></a>
                </div>
            </div> --}} -->

            <div class="container">
                <div class="row row-cols-2 gap-3 justify-content-center">
                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Profil</h4>
                            </div>
                            <div class="card-block">
                                <span class="badge bg-danger">*Lengkap</span>
                            </div>
                            <a class="stretched-link" href="/profile"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Dokumen</h4>
                            </div>
                            <div class="card-block">
                                <span class="badge bg-danger">*Lengkap</span>
                            </div>
                            <a class="stretched-link" href="/profile"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Pendaftaran</h4>
                            </div>
                            <div class="card-block">
                                <span class="badge bg-danger">*Lengkap</span>
                            </div>
                            <a class="stretched-link" href="/profile"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Status Pendaftaran</h4>
                            </div>
                            <div class="card-block">
                                <span class="badge bg-danger">*Lengkap</span>
                            </div>
                            <a class="stretched-link" href="/profile"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
