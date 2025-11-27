<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pegawai;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return View('pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:pegawais',
            'jabatan' => 'required',

        ]);
         Pegawai::create($request->all());
         return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
         $request->validate([
        'nama' => 'required',
        'nip' => 'required|unique:pegawais,nip,' . $pegawai->id,
        'jabatan' => 'required',
    ]);

    $pegawai->update($request->all());
    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
         $pegawai->delete();
         return redirect()->route('pegawai.index')->with('success', 'Pegawai dihapus.');
    }
}
