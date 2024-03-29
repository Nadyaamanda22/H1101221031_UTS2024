@extends('layout.main')
@section('content')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Form Gaji</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan" required>
                                <option value="">Pilih Jabatan</option>
                                <option value="Chief Executif Officer">Chief Executif Officer</option>
                                <option value="Chief Information Officer">Chief Information Officer</option>
                                <option value="Chief Marketing Officer">Chief Marketing Officer</option>
                                <option value="Chief Financial Officer">Chief Financial Officer</option>
                                <option value="Chief Technology Officer">Chief Technology Officer</option>
                                <option value="Chief Operating Officer">Chief Operating Officer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <select class="form-select" id="gaji" name="gaji" required>
                                <option value="">Pilih Gaji</option>
                                <option value="0-1000000">Rp.0 - Rp.1000.000</option>
                                <option value="1000000-5000000">Rp.1.000.000 - Rp. 5.000.000</option>
                                <option value="5000000-8000000">Rp.5.000.000 - Rp. 8.000.000</option>
                                <option value="8000000-10000000">Rp.8.000.000 - Rp. 10.000.000</option>
                                <option value="10000000-12000000">Rp.10.000.000 - Rp.12.000.000</option>
                                <option value="> 12000000"> >Rp.12.000.000</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <select class="form-select" id="pendidikan" name="pendidikan" required>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pasca Sarjana">Pasca Sarjana</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
