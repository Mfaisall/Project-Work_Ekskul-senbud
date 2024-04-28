<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function dashboard(){
        return view('Admin.dashboard');
    }

    public function auth(Request $request){
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('name', 'password');
        if (Auth::attempt($user)){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif (Auth::user()->role == 'guru') {
                return redirect()->route('dashboard-guru');
            }
        } else {
            return redirect()->back()->with('failed', "Gagal login silah cek kemabali");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "password" => Hash::make($request->password),
        ]);
        return redirect()->back();
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
