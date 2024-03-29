@extends('layout.main')
@section('content')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_pegawai" class="form-label">Kode Pegawai</label>
                            <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" class="form-control" id="jabatan" name="jabatan" required>
                                <option value="">Pilih Jabatan</option>
                                <option value="Chief Executif Officer">Chief Executif Officer</option>
                                <option value="Chief Information Officer">Chief Information Officer</option>
                                <option value="Chief Marketing Officer">Chief Marketing Officer</option>
                                <option value="Chief Financial Officer">Chief Financial Officer</option>
                                <option value="Chief Technology Officer">Chief Technology Officer</option>
                                <option value="Chief Operating Officer">Chief Operating Officer</option>
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
