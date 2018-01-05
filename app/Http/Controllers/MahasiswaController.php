<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function showAllMahasiswa()
    {
        return response()->json(Mahasiswa::all());
    }

    /*public function showOneMahasiswa($nim)
    {
        return response()->json(Mahasiswa::find($nim));
    }*/

    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());

        return response()->json($mahasiswa, 201);
    }
/*
    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }*/
}
