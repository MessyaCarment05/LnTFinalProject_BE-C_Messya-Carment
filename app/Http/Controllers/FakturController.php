<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Category;
use App\Models\Faktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class FakturController extends Controller
{
    public function createFaktur(){
        $category=Category::all();
        $barang=Barang::all();
        return view('createFaktur', ["category"=>$category,"barang"=>$barang ]);
    }
   
    public function storeFaktur (Request $req){
       

        Faktur::create([
            'category_id'=>$req->category_id,
            'nama_barang'=>$req->nama_barang,
            'harga'=>$req->harga,
            'jumlah'=>$req->jumlah,
            'alamat'=>$req->alamat,
            'kodePos'=>$req->kodePos,
            'subTotal'=>$req->subTotal,
            'totalAll'=>$req->totalALl,
        ]);
        return redirect()->back();
    }
    public function showFaktur(){
        $faktur = Faktur::all();
        return view('createFaktur', compact('faktur'));
    }
}
