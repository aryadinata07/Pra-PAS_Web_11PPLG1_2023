@extends('layout.main')
@section('content')
    <h1 class= 'mb-3'>List Nama Nama Hewan</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">Nomor</th>
                <th scope="col">Serangga</th>
                <th scope="col">Makanan</th>
                <th scope="col">deskripsi</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
             @foreach($serangga as $serangga)
                <tr>
                    <td>{{$serangga -> id}}</td>
                    <td>{{ $serangga->nama_serangga }}</td>
                    <td>{{ $serangga->makanan }}</td>
                    <td>{{ $serangga->deskripsi }}</td>
                    <td> 
                    <a href= "/serangga/detail/{{ $serangga->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection
