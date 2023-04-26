<?php

namespace App\Http\Controllers;
// use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BarangController extends Controller
{
    public function createBarang(){
        $category=Category::all();
        return view('createBarang', ["category"=>$category]);
    }
    public function show(){
        $data = Barang::all();
        return view('welcome', compact('data'));
    }
    public function storeBarang (Request $req){
        $req->validate([
            'gambar_barang'=>'required|mimes:jpg,png'
        ]);

        $file_uploaded=$req->gambar_barang;
        $url=$file_uploaded->store("gambarBarang");
        
        Barang::create([
            'category_id'=>$req->category_id,
            'nama_barang'=>$req->nama_barang,
            'harga'=>$req->harga,
            'jumlah'=>$req->jumlah,
            'image'=>$url,
        ]);
        return redirect()->back();
    }
    public function edit($id){
        $data2 = Barang::findOrFail($id);
        $category = Category::all();
        return view('editBarang',compact('data2','category'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'gambar_barang2'=>'required|mimes:jpg,png'
        ]);

        $file_uploaded2=$request->gambar_barang2;
        $url2=$file_uploaded2->store("gambarBarang");

        Barang::findOrFail($id)->update([
            'category_id'=>$request->category_id,
            'nama_barang'=>$request->nama_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
            'image'=>$url2,
           
        ]);
        return redirect('/');
    }
    public function delete($id){
        Barang::destroy($id);
        return redirect('/');
    }
    // public function editJumlah($id)
    // {
    //     $data3 = Barang::findOrFail($id);
    //     return redirect('/');
    // }
    // public function updateJumlah (Request $request2, $id)
    // {
    //     Barang::findOrFail($id)->update([
            
    //         'jumlah'=>$request->jumlah-1,
    //     ]);
    //     return redirect('/');
    // }
}
