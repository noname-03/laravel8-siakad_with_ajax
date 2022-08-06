<?php

namespace App\Http\Controllers;

use App\Models\KontrakMatakuliah;
use App\Models\Mahasiswa;
use App\Models\Semester;
use Illuminate\Http\Request;

class KontrakMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrakMatakuliah = KontrakMatakuliah::all();
        return view('kontrakmatakuliah.index', compact('kontrakMatakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester = Semester::all();
        $mahasiswa = Mahasiswa::all();
        return view('kontrakmatakuliah.create', compact('semester', 'mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KontrakMatakuliah::create($request->all());
        return redirect()->route('kontrakmatakuliah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KontrakMatakuliah  $kontrakMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(KontrakMatakuliah $kontrakMatakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KontrakMatakuliah  $kontrakMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontrakMatakuliah = KontrakMatakuliah::findOrFail($id);
        // dd($kontrakMatakuliah);
        $semester = Semester::all();
        $mahasiswa = Mahasiswa::all();
        return view('kontrakmatakuliah.edit', compact('semester', 'mahasiswa', 'kontrakMatakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KontrakMatakuliah  $kontrakMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kontrakMatakuliah = KontrakMatakuliah::findOrFail($id);
        $kontrakMatakuliah->update($request->all());
        return redirect()->route('kontrakmatakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontrakMatakuliah  $kontrakMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kontrakMatakuliah = KontrakMatakuliah::findOrFail($id);
        $kontrakMatakuliah->delete();
        return redirect()->route('kontrakmatakuliah.index');
    }
}
