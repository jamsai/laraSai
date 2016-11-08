<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function userRedeem(){{
      if (Auth::guest()) {
        return 'pls login';
      }
      else{
        $id = Auth::id();
        $type = DB::table('users')->where('id', $id)->value('type');
        if($type==1){
          $redeemvalue = DB::table('redeemcode')->where('redeemcode', $_GET['redeemCode'])->value('value');
          $score = DB::table('users')->where('id', $id)->value('score');
          $result = $score+$redeemvalue;
          DB::table('users')
                ->where('id', $id)
                ->update(['score' => $result]);
          DB::table('redeemcode')->where('redeemcode',$_GET['redeemCode'])->delete();
          return "redeem sucessful";

        }
        else{
          return "You are shopkeeper not user";
        }
      }
    }}

}
