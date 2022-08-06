@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kontrak Kuliah</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Kontrak Kuliah</h6>
                <p></p>
            </div>
            <div class="card-body">
                {{-- {{ route('routeName', ['id' => 1]) }} --}}
                <form action="{{ route('kontrakmatakuliah.update', $kontrakMatakuliah->id) }}" method="POST">
                    @csrf @method('PATCH')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Mahasiswa</label>
                            <select id="inputState" name="mahasiswa_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($mahasiswa as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $kontrakMatakuliah->mahasiswa_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_mahasiswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Semester</label>
                            <select id="inputState" name="semester_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($semester as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $kontrakMatakuliah->semester_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>

    </div>
@endsection
