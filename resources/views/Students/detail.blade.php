@extends('layouts.main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <h1>Detail Student</h1>
            <!-- ambil card tanpa gambar dari boostrap -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$students->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$students->nrp}}</h6>
                    <p class="card-text">{{$students->email}}</p>
                    <p class="card-text">{{$students->jurusan}}</p>

                    <a href="{{$students->id}}/edit" class="btn btn-primary">edit</a>

                    <form action="{{$students->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')">delete</button>
                    </form>
                    <a href="/students" class="card-link">kembali</a>
                    <!-- laravel requestnya untuk delete tidak pakai get namun method delete ini adalah protect dari orang iseng yang mengetikkan di url untuk menghapus data dan harus dibungkus dalam suatu form dengan mengirimkan data hidden dengan method delete-->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection