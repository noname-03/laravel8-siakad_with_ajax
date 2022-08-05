<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function fetchMahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mahasiswa' => 'required|max:191',
            'alamat' => 'required|max:191',
            'no_tlp' => 'required|max:15|min:10',
            'email' => 'required|email|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $Mahasiswa = new Mahasiswa;
            $Mahasiswa->nama_mahasiswa = $request->input('nama_mahasiswa');
            $Mahasiswa->alamat = $request->input('alamat');
            $Mahasiswa->no_tlp = $request->input('no_tlp');
            $Mahasiswa->email = $request->input('email');
            $Mahasiswa->save();
            return response()->json([
                'status' => 200,
                'message' => 'Mahasiswa Added Successfully.'
            ]);
        }
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            return response()->json([
                'status' => 200,
                'mahasiswa' => $mahasiswa,
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
            'nama_mahasiswa' => 'required|max:191',
            'alamat' => 'required|max:191',
            'no_tlp' => 'required|max:15|min:10',
            'email' => 'required|email|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $Mahasiswa = Mahasiswa::find($id);
            if ($Mahasiswa) {
                $Mahasiswa->nama_mahasiswa = $request->input('nama_mahasiswa');
                $Mahasiswa->alamat = $request->input('alamat');
                $Mahasiswa->no_tlp = $request->input('no_tlp');
                $Mahasiswa->email = $request->input('email');
                $Mahasiswa->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Mahasiswa Updated Successfully.'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No Mahasiswa Found.'
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        if ($Mahasiswa) {
            $Mahasiswa->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Mahasiswa Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Mahasiswa Found.'
            ]);
        }
    }
}
