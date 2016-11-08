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
    public function userExchageReward(){{
      if (Auth::guest()) {
        return 'pls login';
      }
      else{
        $id = Auth::id();
        $type = DB::table('users')->where('id', $id)->value('type');
        $name = DB::table('users')->where('id', $id)->value('name');
        $promotionName = DB::table('promotions')->where('promotionID', $_GET['promotionID'])->value('promotionName');
        if($type==1){
          $promotion_value = DB::table('promotions')->where('promotionID', $_GET['promotionID'])->value('value');
          $score = DB::table('users')->where('id', $id)->value('score');
          if($score>=$promotion_value){
              $score_left = $score-$promotion_value;
              DB::table('users')
                    ->where('id', $id)
                    ->update(['score' => $score_left]);
              return ''.$name.' is received reward name '.$promotionName.' and amount point left is '.$score_left;
          }
          else{
            return "not enough point";
          }

        }
        else{
          return "You are shopkeeper not user";
        }
      }
    }}

}
