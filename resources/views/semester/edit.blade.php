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
                <form action="{{ route('semester.update', $semester->id) }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Semester</label>
                            <input type="text" class="form-control" id="inputEmail4"
                                placeholder="Masukan Semester Ke Berapa" name="semester" value="{{ $semester->semester }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>

    </div>
@endsection
