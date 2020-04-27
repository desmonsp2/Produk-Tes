<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class Controller_Produk extends Controller
{
    public function index(){
        $produk_list = Produk::all();
        return view('produk.addproduk', compact('produk_list'));
    }
    
    public function simpan(Request $request){
       $produk = new Produk;
       $produk->id_additional = $request->input('id_additional');
       $produk->nama_produk = $request->input('nama_produk');
       $produk->harga_pokok = $request->input('harga_pokok');
       $produk->harga_jual = $request->input('harga_jual');
        $produk->save();
        return redirect('produk');    
    }
    public function detail($id){
        $produk = Produk::findOrFail($id);
        return view('produk', compact('produk'));
    }
    public function update(Request $request, Product $product)
    {
    
    }
    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('produk'. compact('produk')); 
    }

}
