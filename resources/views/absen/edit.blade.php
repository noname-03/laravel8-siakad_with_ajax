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
                <form action="{{ route('absen.update', $absen->id) }}" method="POST">
                    @csrf @method('PATCH')

                    {{-- <div class="form-row">
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
                    </div> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Waktu Absen</label>
                            <input type="date" class="form-control" id="inputEmail4" name="waktu_absen"
                                value="{{ $absen->waktu_absen }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Mahasiswa</label>
                            <select id="inputState" name="mahasiswa_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($mahasiswa as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $absen->mahasiswa_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_mahasiswa }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Matakuliah</label>
                            <select id="inputState" name="matakuliah_id" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($matakuliah as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $absen->matakuliah_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_matakuliah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Keteragan</label>
                            <select id="inputState" name="keterangan" class="form-control">
                                <option value="Hadir" {{ $absen->keterangan == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                <option value="Tidak Hadir" {{ $absen->keterangan == 'Tidak Hadir' ? 'selected' : '' }}>
                                    Tidak Hadir</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>

    </div>
@endsection
