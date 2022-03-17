<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function index($size,$_user){
        // echo $_url;die;
        $_url = "http://127.0.0.1:8000/".$_user;
        return view('qr-code',['size'=>$size,'url'=>$_url,'user'=>$_user]);
    }
    // public function store(){
    //     QrCode::format('png')->size($size)->generate($url,storage_path($user.'.png'));
    // }
}
