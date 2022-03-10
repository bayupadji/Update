@extends("Layout/main")
@section('konten')
    <!-- content area -->
    <div class="col py-5 ">
        <div class="container">
            <h3 class="my-4">Pengajuan Pendaftaran</h3>
            <div class="form-check rad selectbtn">
                <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                    checked>

                <div class="d-flex justify-content-between">
                    <div class="row">
                        <label class="form-check-label" for="exampleRadios1">
                            <b>Default radio</b>
                        </label>

                        <label class="form-check-label" for="exampleRadios1">
                            Default radio
                        </label>
                    </div>

                    <label class="form-check-label" for="exampleRadios1">
                        Default radio
                    </label>
                </div>
            </div>

            {{-- button submit --}}
            <button type="submit" class="btn tombol my-3" style="width: 100%;">
                Submit
            </button>
        </div>
    </div>
    </div>
    </div>
@endsection
