<?php

namespace App\Http\Controllers\Toko\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko\Profil;

class ProductController extends Controller
{
    public function index()
    {
        $active_user = Auth::user();
        $mitra_profil = Profil::where('user_id',$active_user->id)->first();
        if(is_null($mitra_profil)){
            return redirect('dashboard/store/form');
        }
        return view('product');
    }

    public function upload_produk(Request $request)
    {
        $user = Auth::user();
        $mitra = Profil::where('mitra_id',$user->id)->get();
        $product = new Produk;
        $product->product_nama = $request->produk;
        $product->product_deskripsi = $request->deskripsi;
        $product->mitra_id = $mitra[0]->id;
        $product->category_id = $mitra[0]->jenis_penjualan;
        $product->harga = $request->harga;
        $product->stok_unit = $request->stok_unit;
        $product->ketersediaan_produk = $request->ketersediaan;
        // $product->gambar = $request->gambar;
        if ($request->hasFile('gambar')) {
            $tujuanFile = "photo/mitra/product_photo";
            $file = $request->hasFile('gambar');
            $fileName = "Product-".$mitra->nama_toko."-".$file->getClientOriginalName();
            $file->move($tujuanFile, $fileName);
        }
        $product->note = $request->note;
        $product->save();
    }
}
