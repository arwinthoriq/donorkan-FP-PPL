<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Crypt;

class TransaksiController extends Controller
{
        public function dashboard(){  //dashboard
            $transaksi = Transaksi::where(['pasien_id' => auth()->user()->id])->get();

            //menampilkan semua jumlah pendonor
            $task2 = Transaksi::select('pendonor_id');
            $transaksi2 = $task2->where(['pasien_id' => auth()->user()->id]);
            return view('home', compact('transaksi', 'transaksi2'));
            //menampilkan semua jumlah pendonor
          //  $s = Transaksi::slug('pendonor_id');
           // $task3 = Transaksi::select('pendonor_id');
           // $transaksi3 = $task3->where('pendonor_id', 'like', "%".$s."%");
            
        }
        
        public function daftar(){ //riwayat donor darah
           $transaksi = Transaksi::where(['pendonor_id' => auth()->user()->id])->get();
         //  $transaksi = Transaksi::with('user')->get();
            return view('donorkan.transaksi.daftar', compact('transaksi'));
         //  return view('donorkan.transaksi.daftar',['transaksi'=>$transaksi]);
         //->('pendonor_id')::count()
         //->where('pendonor_id')::count()->get()
        }
       

        public function form(){
            return view('donorkan.transaksi.tambah');
        }

        public function tambah(Request $request){
            $this->validate($request, [
            'pendonor_id'=>'',
            'pasien_id'=>'',
            'darah_id'=>'',
            ]);
            Transaksi::create([
            'pendonor_id' => $request->pendonor_id,
            'pasien_id' => $request->pasien_id,
            'darah_id' => $request->darah_id,
            ]);
            return redirect()->route('name.donorkan.transaksi.daftar');
        }
}