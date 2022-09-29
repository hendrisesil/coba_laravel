@extends('layouts.main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">
            <h1>Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->Jurusan}}</td>
                        <td>
                            <a href="" class="badge bg-success text-decoration-none">edit</a>
                            <a href="" class="badge bg-danger text-decoration-none">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection