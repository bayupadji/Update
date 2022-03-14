@extends("Layout/main")
@section('konten')
    <div class="col py-3">
        <div class="row">
            <h3 class="header">Dokumen</h3>
            <div class="col">
                <form class="">
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">KTP</label>
                        <input class="form-control" id="formFileLg" type="file" name="ktp">
                    </div>
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">KTA</label>
                        <input class="form-control" id="formFileLg" type="file" name="kta">
                    </div>
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">BPJS</label>
                        <input class="form-control" id="formFileLg" type="file" name="bpjs">
                    </div>
                    <!-- <div clas="">
                                                                                    <label for="formFileLg" class="form-label">PAS FOTO</label>
                                                                                    <input class="form-control" id="formFileLg" type="file" name="foto">
                                                                                </div> -->
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">CV</label>
                        <input class="form-control" id="formFileLg" type="file" name="">
                    </div>
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">Rekening Tabungan / Deposito (*min.250jt)</label>
                        <input class="form-control" id="formFileLg" type="file" name="">
                    </div>
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">NPWP</label>
                        <input class="form-control" id="formFileLg" type="file" name="">
                    </div>
                    <div class="inputdoc">
                        <label for="formFileLg" class="form-label">Pernyataan bersedia (*Pdf)</label>
                        <input class="form-control" id="formFileLg" type="file" name="">
                        <label for="formFileLg" class="unduh">Template berkas <a class="text-primary"
                                href="http://">Unduh</a></label>
                    </div>
                    <br>
                    <button type="submit" class="sbmt my-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
