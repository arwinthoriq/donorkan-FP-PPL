<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darah extends Model
{
    protected $table = 'darah';
    protected $guarded = [];

    public function transaksi(){
        return $this->hasMany('App\Transaksi');
        }
}