<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Jadwal;
use App\Models\room;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = room::all();
        $ekskul = Ekskul::all();
        $datajadwal = Jadwal::with('room', 'ekskul')->get();
        return view('Admin.jadwal.index', compact('kelas', 'ekskul', 'datajadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'schedule' => 'required',
            'kelas' => 'required',
            'room_id' => 'required',
            'ekskul_id' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
        ]);

        Jadwal::create([
            'schedule' => $request->schedule,
            'kelas' => $request->kelas,
            'room_id' => $request->room_id,
            'ekskul_id' => $request->ekskul_id,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
        ]);
        return redirect()->route('jadwal')->with('');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
