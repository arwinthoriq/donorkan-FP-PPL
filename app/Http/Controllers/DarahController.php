<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Darah;
use Illuminate\Support\Facades\Crypt;

class DarahController extends Controller
{
       
        public function idpesan($id)//menampilkan id tempat yg di klik
        {
         $id = Crypt::decrypt($id);
            $data=Darah::where('id', $id)->first();
          //  if($data != $data) {
             return view('donorkan.transaksi.tambah',['dt'=>$data]);
          //   } else {
           //      return abort(404);
           //  }
         }

        public function darah(){ //menampilkan darah di awal
            $data = Darah::get();
            return view('darah', compact('data'));
        }
        public function daftar(){ 
            $transaksi = Darah::where(['pasien_id' => auth()->user()->id])->get();
            return view('donorkan.darah.daftar', compact('transaksi'));
        }

        public function form(){
           return view('donorkan.darah.tambah');
        }

        public function tambah(Request $request){
            $this->validate($request, [
            'pasien_id'=>'',
            'golongan_darah'=>'required|between:1,5',
            'nama'=>'required|between:1,100',
            'usia'=>'required|between:1,100',
            'jenis_kelamin'=>'required|between:1,100',
            'no_hp'=>'required',
            'alamat'=>'required|between:1,100',
            'riwayat_penyakit'=>'required|between:1,100',
            ]);
            Darah::create([
            'pasien_id' => $request->pasien_id,
            'golongan_darah' => $request->golongan_darah,
            'nama' => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            ]);
            return redirect()->route('name.donorkan.darah.daftar');
        }
}