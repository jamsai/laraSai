<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class shopController extends Controller
{
  //   public function add($id, $point){{
  //
  //     $score = DB::table('users')->where('id', $id)->value('score');
  //     $name = DB::table('users')->where('id', $id)->value('name');
  //     $result = $score+$point;
  //
  //     DB::table('users')
  //           ->where('id', $id)
  //           ->update(['score' => $result]);
  //
  //
  //     return $point .' add to ' . $id . ': ' . $name . ' : The result is :' . $result;
  //
  //   }
  // }
  public function addPointGET(){{
       //var_dump($_GET);
       //return ''.$_GET['customerID'];
       if (Auth::guest()) {
         return redirect("/login");
       }
       else{
         $id = Auth::id();
         $type = DB::table('users')->where('id', $id)->value('type');
         if($type == 1){
           return view('permissionErrorStatus')
           ->with('title', "You don't have permission!");
         }
         else{
           $score = DB::table('users')->where('id', $_GET['customerID'])->value('score');
           $name = DB::table('users')->where('id', $_GET['customerID'])->value('name');
           $result = $score+$_GET['point'];

           DB::table('users')
                 ->where('id', $_GET['customerID'])
                 ->update(['score' => $result]);

          return view('shopProcessAddorRemovePointStatus')
          ->with('title', "Point is added!")
          ->with('name', $name)
          ->with('value', $_GET['point'])
          ->with('totalPoint', $result)
          ->with('customerID', $_GET['customerID'])
          ->with('action', "added");
         }
       }
    }
  }
    // public function remove($id, $point){{
    //
    //   $score = DB::table('users')->where('id', $id)->value('score');
    //   $name = DB::table('users')->where('id', $id)->value('name');
    //   $result = $score-$point;
    //
    //   DB::table('users')
    //         ->where('id', $id)
    //         ->update(['score' => $result]);
    //
    //
    //   return $point .' remove to ' . $id . ': ' . $name . ' : The result is :' . $result;
    //
    //   }
    // }
    public function removePointGET(){{
       //var_dump($_GET);
       //return ''.$_GET['customerID'];
       if (Auth::guest()) {
         return redirect("/login");
       }
       else{
         $id = Auth::id();
         $type = DB::table('users')->where('id', $id)->value('type');
         if($type == 1){
           return view('permissionErrorStatus')
           ->with('title', "You don't have permission!");
         }
         else{
           $score = DB::table('users')->where('id', $_GET['customerID'])->value('score');
           $name = DB::table('users')->where('id', $_GET['customerID'])->value('name');
           $result = $score-$_GET['point'];

           DB::table('users')
                 ->where('id', $_GET['customerID'])
                 ->update(['score' => $result]);


          return view('shopProcessAddorRemovePointStatus')
          ->with('title', "Point is removed!")
          ->with('name', $name)
          ->with('value', $_GET['point'])
          ->with('totalPoint', $result)
          ->with('customerID', $_GET['customerID'])
          ->with('action', "removed");
         }
       }
    }
  }
  public function createPromotion(){{
        //return $_POST['username'];

        if (Auth::guest()) {
          return redirect("/login");
        }
        else {
          $id = Auth::id();
          $type = DB::table('users')->where('id', $id)->value('type');
          if($type == 1){
            return view('permissionErrorStatus')
            ->with('title', "You don't have permission!");
          }
          else{
            DB::table('promotions')->insert([
            'promotionName' => $_GET['promotionName'],
            'description' => $_GET['description'],
            'issueBy' => $_GET['issueBy'],
            'expired' => $_GET['bday'],
            'value' => $_GET['value']]);

            return view('createpromotionStatus')
            ->with('title', "Create Promotion Complete")
            ->with('promotionName', $_GET['promotionName'])
            ->with('description', $_GET['description'])
            ->with('issueBy', $_GET['issueBy'])
            ->with('expired', $_GET['bday'])
            ->with('value', $_GET['value']);
          }
        }

    }
  }
  public function editPromotion(){{
        //return $_POST['username'];

        if (Auth::guest()) {
          return redirect("/login");
        }
        else {
          $id = Auth::id();
          $type = DB::table('users')->where('id', $id)->value('type');
          if($type == 1){
            return view('permissionErrorStatus')
            ->with('title', "You don't have permission!");
          }
          else{
            DB::table('promotions')->insert([
            'promotionName' => $_GET['id'],
            'promotionName' => $_GET['promotionName'],
            'description' => $_GET['description'],
            'issueBy' => $_GET['issueBy'],
            'expired' => $_GET['bday'],
            'value' => $_GET['value']]);

            return view('createpromotionStatus')
            ->with('title', "Create Promotion Complete")
            ->with('promotionName', $_GET['promotionName'])
            ->with('description', $_GET['description'])
            ->with('issueBy', $_GET['issueBy'])
            ->with('expired', $_GET['bday'])
            ->with('value', $_GET['value']);
          }
        }

    }
  }
  public function generateRedeemCode(){{
        //return $_POST['username'];

        if (Auth::guest()) {
          return redirect("/login");
        }
        else {
          $id = Auth::id();
          $type = DB::table('users')->where('id', $id)->value('type');
          if($type == 1){
            return view('permissionErrorStatus')
            ->with('title', "You don't have permission!");
          }
          else{
            $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $promocode = "";
            for ($i = 0; $i < 10; $i++) {
              $promocode .= $chars[mt_rand(0, strlen($chars)-1)];
            }
            DB::table('redeemcodes')->insert([
            'redeemcode' => $promocode,
            'value' => $_GET['amoutOfRedeemValue']]);
            session()->flash('message', 'New Code is '.$promocode.' ');
            // return view('generateRedeemCodeStatus')
            return Redirect('redeemcodes');
            // ->with('redeemCode', $promocode)
            // ->with('codeValue', $_GET['amoutOfRedeemValue']);
          }
        }

    }
  }

}
