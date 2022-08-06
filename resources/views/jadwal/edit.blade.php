@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Kelas</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                    @csrf @method('PATCH')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Jadwal</label>
                            <input type="date" class="form-control" id="inputEmail4" name="jadwal"
                                value="{{ $jadwal->jadwal }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Matakuliah</label>
                            <select id="inputState" name="matakuliah_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($matakuliah as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $jadwal->matakuliah_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_matakuliah }}</option>
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
