@extends('layout.main')
@section('content')
    <h1 class='mb-3'>List Nama Nama Hewan</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">Nomor</th>
                <th scope="col">Nama Hewan</th>
                <th scope="col">Nama Serangga</th>
                <th scope="col">Persamaan</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach($jenis as $jenis)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $jenis->nama_hewanLangka }}</td>
                    <td>{{ $jenis->nama_seranggaLangka }}</td>
                    <td>{{ $jenis-> penyebab }}</td>
                    <td> 
                    <a href= "/langka/detail/{{ $jenis->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
