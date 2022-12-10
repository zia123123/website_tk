@extends('adminlte::page')

@section('title', 'Edit gallery')

@section('content_header')
    <h1 class="m-0 text-dark">Edit gallery</h1>
@stop

@section('content')
    <form action="{{route('gallery.update', $gallery)}}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" placeholder="judul" name="judul" value="{{$gallery->judul ?? old('judul')}}">
                            @error('judul') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputContent">deskripsi</label>
                            <textarea rows="4" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputContent" placeholder="Masukkan deskripsi" name="deskripsi" >{{$gallery->deskripsi ?? old('deskripsi')}}</textarea>
                            @error('deskripsi') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                        <div>
                         <input id="minute_length" type="file" name="filename" required="">
                        </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('gallery.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
