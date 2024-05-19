<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function beranda(){
        return view('beranda');
    }

    public function kontak($id){
        return view('kontak',['idUser'=>$id]);
    }

    public function tentang(){
        $nama="Rusdi";
        $umur= 19;
        $hobi=["renang","baca","tidur"];
        return view('tentang',["nama1"=>$nama,
                                "umur1"=>$umur,
                                "hobi1"=>$hobi]);
    }
}
