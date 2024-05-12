<?php

namespace App\Http\Controllers;

use App\Models\AbsenInstruktur;
use App\Models\Instruktur;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AbsenInstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsenInstruktur $absenInstruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsenInstruktur $absenInstruktur)
    {
        $DataIns = Instruktur::with('ekskul', 'absen')->get();
        return view('Instruktur.edit', compact('DataIns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbsenInstruktur $absenInstruktur)
    {
        // dd($request->all());
        $request->validate([
            'status_kehadiran.*' => 'required|in:hadir,alpha,izin,sakit',
        ]);
    
        $kehadiran = $request->status_kehadiran;

        // Carbon::setTimezone('Asia/Jakarta');

        $tanggalKehadiran = Carbon::now()->setTimezone('Asia/Jakarta');
    
        foreach ($kehadiran as $instrukturId => $status) {
            AbsenInstruktur::where('instruktur_id', $instrukturId)->UpdateOrCreate(['instruktur_id' => $instrukturId], ['status_kehadiran' => $status, 'tanggalKehadiran' => $tanggalKehadiran,]);
        }
        // foreach ($kehadiran as $instrukturId => $status) {
        //     // Buat entri baru untuk setiap siswa dengan status kehadiran yang diberikan
        //     AbsenInstruktur::create([
        //         'instruktur_id' => $instrukturId,
        //         'status_kehadiran' => $status,
        //         'tanggalKehadiran' => $tanggalKehadiran,
        //     ]);
        // }
        
        return redirect()->route('data.instruktur')->with('successAbsensi', 'Data absensi siswa berhasil diperbarui.');
    }
//     public function update(Request $request,)
// {
//     $request->validate([
//         'status_kehadiran.*' => 'required|in:hadir,alpha,izin,sakit',
//     ]);

//     $kehadiran = $request->status_kehadiran;

//     foreach ($kehadiran as $instrukturId => $status) {
//         // Cek apakah sudah ada entri absen untuk siswa ini
//         $existingAbsen = AbsenInstruktur::where('instruktur_id', $instrukturId)->first();

//         if ($existingAbsen) {
//             // Jika entri sudah ada, perbarui status kehadiran dan tanggal kehadiran
//             $existingAbsen->update([
//                 'status_kehadiran' => $status,
//                 'tanggalKehadiran' => now(),
//             ]);
//         } else {
//             // Jika tidak, buat entri baru
//             AbsenInstruktur::create([
//                 'instruktur_id' => $instrukturId,
//                 'status_kehadiran' => $status,
//                 'tanggalKehadiran' => now(),
//             ]);
//         }
//     }
    
//     return redirect()->route('data.instruktur')->with('success', 'Data absensi siswa berhasil diperbarui.');
// }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsenInstruktur $absenInstruktur)
    {
        //
    }
}
