<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function index($size,$_user){
        // echo $_url;die;
        $_url = "http://127.0.0.1:8000/".$_user;
        return view('qr-code',['size'=>$size,'url'=>$_user]);
    }
}
