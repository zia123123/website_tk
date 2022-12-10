@extends('adminlte::page')

@section('title', 'List kelas')

@section('content_header')
    <h1 class="m-0 text-dark">List kelas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('kelas.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>persyaratan</th>
                            <th>umur</th>
                            <th>rasio</th>
                            <th>waktu</th>
                            <th>hari</th>
                            <th>photo</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kelas as $key => $kelass)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$kelass->judul}}</td>
                                <td>{{$kelass->persyaratan}}</td>
                                <td>{{$kelass->umur}}</td>
                                <td>{{$kelass->rasio}}</td>
                                <td>{{$kelass->waktu}}</td>
                                <td>{{$kelass->hari}}</td>
                                <td><img style="width: 30px;" src="{{URL::asset($kelass->filename)}}"></td>
                                <td>
                                    <a href="{{route('kelas.edit', $kelass)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('kelas.destroy', $kelass)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
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
