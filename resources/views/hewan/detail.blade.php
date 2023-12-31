@extends('layout.main')

@section('content')
    <h2>Student Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">NO</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $hewan->id }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama Hewan</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $hewan->nama_hewan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Makanan</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $hewan->makanan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Seskripsi</label>
            <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $hewan->deskripsi }}" disabled>
        </div>
        <div class="text-center"> 
        <a href="/hewan/all" class="btn btn-primary btn-lg">Back</a>
    </div>
    </div>

    @endsection