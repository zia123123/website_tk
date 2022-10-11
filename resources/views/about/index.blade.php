@extends('adminlte::page')

@section('title', 'Data About')

@section('content_header')
    <h1 class="m-0 text-dark">Data About</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('about.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Content</th>
                            <th>Photo</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $key => $about)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$about->judul}}</td>
                                <td>{{$about->content}}</td>
                                <td><img style="width: 30px;" src="{{URL::asset($about->filename)}}"></td>
                                <td>
                                    <a href="{{route('about.edit', $about)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                   
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush
