<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class shopController extends Controller
{
    public function add($id, $point){{

      $score = DB::table('users')->where('id', $id)->value('score');
      $name = DB::table('users')->where('id', $id)->value('name');
      $result = $score+$point;

      DB::table('users')
            ->where('id', $id)
            ->update(['score' => $result]);


      return $point .' add to ' . $id . ': ' . $name . ' : The result is :' . $result;

    }
  }
  public function addPointGET(){{
       //var_dump($_GET);
       //return ''.$_GET['customerID'];
       if (Auth::guest()) {
         return 'pls login';
       }
       else{
         $id = Auth::id();
         $type = DB::table('users')->where('id', $id)->value('type');
         if($type == 1){
           return "You don't have permission!";
         }
         else{
           $score = DB::table('users')->where('id', $_GET['customerID'])->value('score');
           $name = DB::table('users')->where('id', $_GET['customerID'])->value('name');
           $result = $score+$_GET['point'];

           DB::table('users')
                 ->where('id', $_GET['customerID'])
                 ->update(['score' => $result]);


          return $_GET['point'] .' add to ' . $_GET['customerID'] . ': ' . $name . ' : The result is :' . $result;
         }
       }
    }
  }
    public function remove($id, $point){{

      $score = DB::table('users')->where('id', $id)->value('score');
      $name = DB::table('users')->where('id', $id)->value('name');
      $result = $score-$point;

      DB::table('users')
            ->where('id', $id)
            ->update(['score' => $result]);


      return $point .' remove to ' . $id . ': ' . $name . ' : The result is :' . $result;

      }
    }
    public function removePointGET(){{
       //var_dump($_GET);
       //return ''.$_GET['customerID'];
       if (Auth::guest()) {
         return 'pls login';
       }
       else{
         $id = Auth::id();
         $type = DB::table('users')->where('id', $id)->value('type');
         if($type == 1){
           return "You don't have permission!";
         }
         else{
           $score = DB::table('users')->where('id', $_GET['customerID'])->value('score');
           $name = DB::table('users')->where('id', $_GET['customerID'])->value('name');
           $result = $score-$_GET['point'];

           DB::table('users')
                 ->where('id', $_GET['customerID'])
                 ->update(['score' => $result]);


          return $_GET['point'] .' remove from ' . $_GET['customerID'] . ': ' . $name . ' : The result is :' . $result;
         }
       }
    }
  }
  public function createPromotion(){{
        //return $_POST['username'];

        if (Auth::guest()) {
          return 'pls login';
        }
        else {
          $id = Auth::id();
          $type = DB::table('users')->where('id', $id)->value('type');
          if($type == 1){
            return "You don't have permission!";
          }
          else{
            DB::table('promotions')->insert([
            'promotionName' => $_GET['promotionName'],
            'description' => $_GET['description'],
            'issueBy' => $_GET['issueBy'],
            'expired' => $_GET['bday'],
            'value' => $_GET['value']]);
          return 'Add Complete';
          }
        }

    }
  }
  public function generateRedeemCode(){{
        //return $_POST['username'];

        if (Auth::guest()) {
          return 'pls login';
        }
        else {
          $id = Auth::id();
          $type = DB::table('users')->where('id', $id)->value('type');
          if($type == 1){
            return "You don't have permission!";
          }
          else{
            $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $promocode = "";
            for ($i = 0; $i < 10; $i++) {
              $promocode .= $chars[mt_rand(0, strlen($chars)-1)];
            }
            DB::table('redeemcode')->insert([
            'redeemcode' => $promocode,
            'value' => $_GET['amoutOfRedeemValue']]);
            return $promocode;
          }
        }

    }
  }

}
