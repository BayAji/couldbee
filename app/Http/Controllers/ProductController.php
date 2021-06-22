<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
	public function index(Request $request)
	{
		// mengambil data dari table product
		$product = DB::table('product');
		if(isset($request->userid)){
			$product = $product->where('user_id', $request->userid);
			}
		$product = isset($request->search) && isset($request->search_column) ? $product->where($request->search_column, 'like', "%{$request->search}%") : $product;
		$product = isset($request->order_by) && isset($request->order) ? $product->orderBy($request->order_by, $request->order) : $product;
		$product = $product->paginate(20);
		return response()->json(['product' => $product]);
	}

	// method untuk insert data ke table product
	public function store(Request $request)
	{
		// insert data ke table product
		$product =	DB::table('product')->insert([
			'name' => $request->name,
			'price' => $request->price,
			'picture' => $request->picture,
			'description' => $request->description,
			'stock' => $request->stock,
			'category' => $request->category,
			'user_id' => $request->userid,
			'date' => $request->date,
		]);
		// alihkan halaman ke halaman product
		return response()->json(['product' => $product]);
	}

	// method untuk edit data product
	public function edit($id)
	{
		// mengambil data product berdasarkan id yang dipilih
		$product = DB::table('product')->where('id', $id)->get();
		// alihkan halaman ke halaman product
		return response()->json(['product' => $product]);
	}


	public function detail($id)
	{
		// mengambil data product berdasarkan id yang dipilih
		$product = DB::table('product')->where('id', $id)->first();
		// alihkan halaman ke halaman product 
		return response()->json(['product' => $product]);
	}



	// update data product
	public function update(Request $request)
	{
		// update data product
		$product = DB::table('product')->where('id', $request->id)->update([
			'name' => $request->name,
			'price' => $request->price,
			'picture' => $request->picture,
			'description' => $request->description,
			'stock' => $request->stock,
			'category' => $request->category,
			'user_id' => $request->userid,
			'date' => $request->date,
		]);
		// alihkan halaman ke halaman product
		return response()->json(['product' => $product]);
	}
	
	// method untuk hapus data product
	public function delete($id)
	{
		// menghapus data product berdasarkan id yang dipilih
		$product = DB::table('product')->where('id', $id)->delete();

		// alihkan halaman ke halaman product
		return response()->json(['product' => $product]);
	}
}
