@extends('layout.main')

@section('content')
    <h2>Student Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">NO</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $serangga->id }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama Serangga</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $serangga->nama_serangga }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Makanan</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $serangga->makanan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $serangga->deskripsi }}" disabled>
        </div>
        <div class="text-center"> 
        <a href="/serangga/all" class="btn btn-primary btn-lg">Back</a>
    </div>
    </div>

    @endsection