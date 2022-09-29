@extends('layouts.main')

@section('title','Form tambah data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <h1>Form tambah data Student</h1>
            <!-- menggunkan form group dari boostrap 4.3 -->
            <form method="post" action="/students/posts">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error ('nama')is-invalid @enderror" id="nama" placeholder="masukkan nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">nrp</label>
                    <input type="text" class="form-control @error ('nrp')is-invalid @enderror" id="nrp" placeholder="masukkan nrp" name="nrp" value="{{old('nrp')}}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" placeholder="masukkan email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="masukkan jurusan" name="jurusan" value="{{old('jurusan')}}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah data student</button>
            </form>
        </div>
    </div>
</div>
@endsection