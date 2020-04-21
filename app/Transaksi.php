<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $guarded = [];
    
    public function darah(){
        return $this->belongsTo('App\Darah', 'darah_id');
        }
    
        public function user(){ //untuk tambah
            return $this->belongsTo('App\User', 'pendonor_id');
            }

}