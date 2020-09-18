<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class LoginController extends Controller
{
    //
    public function admin(Request $request){
        return view('login/index');
    }
    function pay2go_encrypt($key = "", $iv = "", $str = "") {
        $str = trim(bin2hex(openssl_encrypt(addpadding($str), 'aes-256-cbc',
       $key, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv)));
        return $str;
        }
       function addpadding($string, $blocksize = 32) {
        $len = strlen($string);
        $pad = $blocksize - ($len % $blocksize);
        $string .= str_repeat(chr($pad), $pad);
        return $string;
        }
}
