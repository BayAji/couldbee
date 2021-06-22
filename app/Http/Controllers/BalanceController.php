<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BalanceController extends Controller
{

    // method untuk detail data user 
    public function detail($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $balance = DB::table('balance')->where('id', $id)->first();
        // passing data user yang didapat ke view edit.blade.php
        return response()->json(['balance' => $balance]);
    }

    public function increase(Request $request)
    {
         // tambah saldo
        if(DB::table('balance')->where('user_id', $request->user_id)->first()){
            $balance = DB::table('balance')->increment('balance', $request->total);
        }else {
            $balance = DB::table('balance')->updateOrInsert(['user_id' => $request->user_id, 'balance' => $request->total]);
        }
       
        
        // alihkan halaman ke halaman user
        return response()->json(['balance' => $balance]);
    }
    public function decrease(Request $request)
    {
        // kurangi saldo setelah membeli
        if(DB::table('balance')->where('user_id', $request->user_id)->first()){
            $balance = DB::table('balance')->decrement('balance', $request->total);
        }else {
            $balance = DB::table('balance')->updateOrInsert(['user_id' => $request->user_id, 'balance' => 0]);
        }
                
        return response()->json(['balance' => $balance]);
    }
}
