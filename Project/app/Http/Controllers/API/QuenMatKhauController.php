<?php

namespace App\Http\Controllers\API;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class QuenMatKhauController extends Controller
{
    public function send(Request $request){
        $thongTin = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'email'      => $request->email
        ];
        Mail::send(['text' => 'mail'], ['name', 'ngoclecaothang'], function($message){
            $message->to('ngoclecaothang@gmail.com', 'ngocle')->subject('Test Email');
            $message->from('ngoclecaothang@gmail.com', 'ngocle');
        });
    }
}
