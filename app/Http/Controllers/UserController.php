<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $user = DB::table('user')
            ->select('id', 'email')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($user) {
            return response()->json(['user' => $user]);
        } else {
            return response()->json(['user' => false]);
        }
    }

    // method untuk menampilkan view form tambah user
    public function tambah(Request $request)
    {
        // insert data ke table user
        $user = DB::table('user')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'notelp' => $request->notelp,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman user
        return response()->json(['user' => $user]);
    }

    // method untuk detail data user 
    public function detail($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $user = DB::table('user')->where('id', $id)->first();
        // passing data user yang didapat ke view edit.blade.php
        return response()->json(['user' => $user]);
    }

    public function update(Request $request)
    {
        // update data user
        $user = DB::table('user')->where('id', $request->id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'notelp' => $request->notelp,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman user
        return response()->json(['user' => $user]);
    }
}
