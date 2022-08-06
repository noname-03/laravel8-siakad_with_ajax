@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Jadwal</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Jadwal</h6>
                <p></p>
                <a href="{{ route('jadwal.create') }}" class="btn btn-success">Tambah Jadwal</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jadwal</th>
                                <th>Matakuliah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Jadwal</th>
                                <th>Matakuliah</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($jadwal as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jadwal }}</td>
                                    <td>{{ $item->matakuliah->nama_matakuliah }}</td>
                                    <td>
                                        <form action="{{ route('jadwal.destroy', $item->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <a class="btn btn-primary" href="{{ route('jadwal.edit', $item->id) }}"
                                                role="button"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('apakah anda mau menghapus data ini ?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
