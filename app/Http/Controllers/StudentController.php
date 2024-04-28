<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Student;
use App\Models\Rombel;
use App\Models\Rayon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombels = Rombel::all();
        $rayons = Rayon::all();
        $ekskul = Ekskul::all();
        $studentDatas = Student::with('absen', 'rombel', 'rayon', 'ekskul')->get();
        return view("Admin.AllData", compact('studentDatas', 'rombels', 'rayons', 'ekskul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.FormTambahData");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required',
            'ekskul_id' => 'required',
            'jk' => 'required',
        ]);

        Student::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'rombel_id' => $request->rombel_id,
            'rayon_id' => $request->rayon_id,
            'ekskul_id' => $request->ekskul_id,
            'jk' => $request->jk,
        ]);
        return redirect()->route('data.all')->with('success', "Berhasil Menambah Data Siswa");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
