@extends('adminlte::page')

@section('title', 'Edit kelas')

@section('content_header')
    <h1 class="m-0 text-dark">Edit kelas</h1>
@stop

@section('content')
    <form action="{{route('kelas.update', $kelas)}}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" placeholder="Judul" name="judul" value="{{$kelas->judul ?? old('judul')}}">
                            @error('judul') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputContent">persyaratan</label>
                            <textarea rows="4" class="form-control @error('content') is-invalid @enderror" id="exampleInputContent" placeholder="Masukkan persyaratan" name="persyaratan" >{{$kelas->persyaratan ?? old('persyaratan')}}</textarea>
                            @error('persyaratan') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputJudul">umur</label>
                            <input type="text" class="form-control @error('umur') is-invalid @enderror" id="exampleInputJudul" placeholder="umur" name="umur" value="{{$kelas->umur ?? old('umur')}}">
                            @error('umur') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputJudul">rasio</label>
                            <input type="text" class="form-control @error('rasio') is-invalid @enderror" id="exampleInputJudul" placeholder="rasio" name="rasio" value="{{$kelas->rasio ?? old('rasio')}}">
                            @error('rasio') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputJudul">waktu</label>
                            <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputJudul" placeholder="waktu" name="waktu" value="{{$kelas->waktu ?? old('waktu')}}">
                            @error('waktu') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputJudul">hari</label>
                            <input type="text" class="form-control @error('hari') is-invalid @enderror" id="exampleInputJudul" placeholder="hari" name="hari" value="{{$kelas->hari ?? old('hari')}}">
                            @error('hari') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <div>
                         <input id="minute_length" type="file" name="filename" required="">
                        </div>
                        </div>

                    </div>
                    

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('kelas.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
