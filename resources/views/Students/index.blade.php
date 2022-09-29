@extends('layouts.main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <h1>Daftar Students</h1>

            <a href="/students/create" class="badge bg-success text-decoration-none my-3">Tambah data students</a>

            <!-- cara menampilkan flash pesan singkat -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <!-- ambil list with bages dari boostrap -->
            <ul class="list-group">
                @foreach( $students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="/students/{{$student->id}}" class="badge bg-success text-decoration-none">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection