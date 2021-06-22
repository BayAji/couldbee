<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // method untuk detail data transaction
    public function detail($id)
    {
        // mengambil data transaction berdasarkan id yang dipilih
        $transaction = DB::table('transaction')->where('id', $id)->first();
        // passing data transaction yang didapat ke view edit.blade.php
        return response()->json(['transaction' => $transaction]);
    }

    public function index($id)
        {
            // mengambil data dari table product
            $transaction = DB::table('transaction')->where('user_id', $id)->paginate(20);
            return response()->json(['transaction' => $transaction]);
        }

    // method untuk menampilkan view form tambah transaction
    public function tambah(Request $request)
    {
        // insert data ke table transaction
        $transaction = DB::table('transaction')->insert([
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'total_price' => $request->total_price,
            'product_id' => $request->product_id,
            'date' => $request->date,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman transaction
        return response()->json(['transaction' => $transaction]);
    }
    public function update(Request $request)
    {
        // update data transaction
        $transaction = DB::table('transaction')->where('id', $request->id)->update([
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman transaction
        return response()->json(['transaction' => $transaction]);
    }
}