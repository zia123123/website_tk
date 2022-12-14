@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Program</h1>
@stop

@section('content')
    <form action="{{route('programs.update', $programs)}}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" placeholder="namaprogram" name="namaprogram" value="{{$programs->namaprogram ?? old('namaprogram')}}">
                            @error('judul') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputContent">Deskripsi</label>
                            <textarea rows="4" class="form-control @error('content') is-invalid @enderror" id="exampleInputContent" placeholder="Masukkan deskripsi" name="deskripsi" >{{$programs->deskripsi ?? old('deskripsi')}}</textarea>
                            @error('content') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                        <div>
                         <input id="minute_length" type="file" name="filename" required="">
                        </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('articles.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
