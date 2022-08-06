@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Kontrak Kuliah</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kontrak Kuliah</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('kontrakmatakuliah.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Mahasiswa</label>
                            <select id="inputState" name="mahasiswa_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($mahasiswa as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_mahasiswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Semester</label>
                            <select id="inputState" name="semester_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($semester as $item)
                                    <option value="{{ $item->id }}">{{ $item->semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>

    </div>
@endsection
