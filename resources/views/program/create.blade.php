@extends('adminlte::page')

@section('title', 'Program Article')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Program</h1>
@stop

@section('content')
    <form action="{{route('programs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" placeholder="namaprogram" name="namaprogram" value="{{old('namaprogram')}}">
                            @error('judul') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputContent">Content</label>
                            <textarea rows="4" type="text" class="form-control @error('content') is-invalid @enderror" id="exampleInputContent" placeholder="Masukkan deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
</textarea>
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
                        <a href="{{route('programs.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
