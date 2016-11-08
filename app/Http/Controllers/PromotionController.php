<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    public function create(){{
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
}
