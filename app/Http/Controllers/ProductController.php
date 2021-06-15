<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class ProductController extends Controller
{
    public function index()
    {
    	// mengambil data dari table product
    	$product = DB::table('product')->paginate(20);
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
	$product = DB::table('product')->where('id',$id)->get();
	// passing data product yang didapat ke view edit.blade.php
	return response()->json(['product' => $product]);
 
}
// update data product
public function update(Request $request)
{
	// update data product
	$product = DB::table('product')->where('id',$request->id)->update([
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
	// $product = DB::table('product')->where('id',$id)->delete();
	$product = DB::table('product')->find($id);
		
	// alihkan halaman ke halaman product
	return response()->json(['product' => $product]);
}
}