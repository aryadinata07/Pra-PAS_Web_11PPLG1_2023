@extends('layout.main')
@section('content')
    <h1 class= 'mb-3'>List Nama Nama Hewan</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">Nomor</th>
                <th scope="col">Nama Hewan</th>
                <th scope="col">Makanan</th>
                <th scope="col">deskripsi</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
             @foreach($hewan as $hewan)
                <tr>
                    <td>{{$hewan -> id}}</td>
                    <td>{{ $hewan->nama_hewan }}</td>
                    <td>{{ $hewan->makanan }}</td>
                    <td>{{ $hewan->deskripsi }}</td>
                    <td> 
                            <a href= "/hewan/detail/{{ $hewan->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection
