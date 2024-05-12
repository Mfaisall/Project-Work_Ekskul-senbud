<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Instruktur;
use Illuminate\Http\Request;

class InstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekskul = Ekskul::all();
        $DataIns = Instruktur::with('absen')->get();
        return view('Instruktur.index', compact('ekskul', 'DataIns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ekskul_id' => 'required',
            'jk' => 'required',
        ]);

        Instruktur::create([
            'nama' => $request->nama,
            'ekskul_id' => $request->ekskul_id,
            'jk' => $request->jk,
        ]);
        return redirect()->route('data.instruktur')->with('addBerhasil', 'berhasil menambahkan data instruktur');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruktur $instruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruktur $instruktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instruktur $instruktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruktur $instruktur)
    {
        //
    }
}
