@extends('layouts.main')

@section('title','Form Edit data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <h1>Form edit data Student</h1>
            <!-- menggunkan form group dari boostrap 4.3 -->
            <form method="post" action="/students/{{$students->id}}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error ('nama')is-invalid @enderror" id="nama" placeholder="masukkan nama" name="nama" value="{{$students->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">nrp</label>
                    <input type="text" class="form-control @error ('nrp')is-invalid @enderror" id="nrp" placeholder="masukkan nrp" name="nrp" value="{{$students->nrp}}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" placeholder="masukkan email" name="email" value="{{$students->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="masukkan jurusan" name="jurusan" value="{{$students->jurusan}}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Edit data student</button>
            </form>
        </div>
    </div>
</div>
@endsection