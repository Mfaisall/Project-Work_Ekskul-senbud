<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Ekskul;
use App\Models\Kehadiran;
use App\Models\Rombel;
use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsenController extends Controller
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
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        $ekskul = Ekskul::all();
        $studentDatas = Student::with('absen', 'rayon', 'rombel')->get();
        if (!$studentDatas) {
            return redirect()->back()->with('error', 'Tidak ada data respon yang ditemukan.');
        }
        return view('Admin.EditDataAll', compact('studentDatas', 'ekskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        $request->validate([
            'status_kehadiran.*' => 'required|in:hadir,alpha,izin,sakit',
        ]);
    
        $kehadiran = $request->status_kehadiran;

        // Carbon::setTimezone('Asia/Jakarta');

        $tanggalKehadiran = Carbon::now()->setTimezone('Asia/Jakarta');
    
        foreach ($kehadiran as $studentId => $status) {
            Absen::where('student_id', $studentId)->updateOrCreate(['student_id' => $studentId], ['status_kehadiran' => $status, 'tanggalKehadiran' => $tanggalKehadiran,]);
        }
        
        return redirect()->route('data.all')->with('successAbs', 'Data absensi siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
