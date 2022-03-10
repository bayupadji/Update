@extends("Layout/main")
@section('konten')
    <div class="container">
        <!-- content area -->
        {{-- all title use h3 and header class!!! --}}
        <h3 class="header">STATUS PENDAFTARAN</h3>

        {{-- table --}}
        <div class="col-10 table-responsive tablestatus">
            <table class="table table-bordered">
                <thead class="bg-grey">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
