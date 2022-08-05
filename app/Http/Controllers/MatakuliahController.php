<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    public function index()
    {
        return view('matakuliah.index');
    }

    public function fetchMatakuliah()
    {
        $matakuliah = Matakuliah::all();
        return response()->json([
            'matakuliah' => $matakuliah,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_matakuliah' => 'required|max:191',
            'sks' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $matakuliah = new Matakuliah;
            $matakuliah->nama_matakuliah = $request->input('nama_matakuliah');
            $matakuliah->sks = $request->input('sks');
            $matakuliah->save();
            return response()->json([
                'status' => 200,
                'message' => 'matakuliah Added Successfully.'
            ]);
        }
    }

    public function edit($id)
    {
        $matakuliah = Matakuliah::find($id);
        if ($matakuliah) {
            return response()->json([
                'status' => 200,
                'matakuliah' => $matakuliah,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Mahasiswa Found.'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_matakuliah' => 'required|max:191',
            'sks' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $matakuliah = Matakuliah::find($id);
            if ($matakuliah) {
                $matakuliah->nama_matakuliah = $request->input('nama_matakuliah');
                $matakuliah->sks = $request->input('sks');
                $matakuliah->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'matakuliah Updated Successfully.'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No matakuliah Found.'
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::find($id);
        if ($matakuliah) {
            $matakuliah->delete();
            return response()->json([
                'status' => 200,
                'message' => 'matakuliah Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No matakuliah Found.'
            ]);
        }
    }
}
