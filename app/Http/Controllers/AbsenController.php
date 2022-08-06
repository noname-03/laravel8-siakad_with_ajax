<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Absen;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = Absen::all();
        return view('absen.index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        return view('absen.create', compact('matakuliah', 'mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absen::create($request->all());
        return redirect()->route('absen.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $absen = Absen::findOrFail($id);
        // dd($kontrakMatakuliah);
        $matakuliah = Matakuliah::all();
        $mahasiswa = Mahasiswa::all();
        return view('absen.edit', compact('matakuliah', 'mahasiswa', 'absen'));
    }

    public function update(Request $request, $id)
    {
        $absen = Absen::findOrFail($id);
        $absen->update($request->all());
        return redirect()->route('absen.index');
    }

    public function destroy($id)
    {

        $absen = Absen::findOrFail($id);
        $absen->delete();
        return redirect()->route('absen.index');
    }
}
