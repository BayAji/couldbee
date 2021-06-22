<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MutationController extends Controller
{
    public function index($id)
	{
		// mengambil data untuk mutasi
		$mutation = DB::table('mutation')->where('user_id', $id);
		$mutation = $mutation->paginate(20);
		return response()->json(['mutation' => $mutation]);
	}

	// method untuk insert data ke table product
	public function store(Request $request)
	{
		// insert data ke table mutation
		$mutation =	DB::table('mutation')->insert([
			'user_id' => $request->user_id,
			'status_balance' => $request->status_balance,
			'remain_balance' => $request->remain_balance,
			'detail_mutation' => $request->detail_mutation,
			'date' => $request->date
		]);
		// alihkan halaman ke halaman product
		return response()->json(['mutation' => $mutation]);
	}

}
