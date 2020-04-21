<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function daftar(Request $req)
    {
        $data = User::get();
        return view('donorkan.user.daftar',['data'=>$data]);
    }
    public function hapus($id)
    {
        User::where('id',$id)->delete();
        return redirect('/Home/Admin/Daftar/User'); //ganti
    }

    
}
