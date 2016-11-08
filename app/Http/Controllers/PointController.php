<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
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
     $score = DB::table('users')->where('id', $_GET['customerID'])->value('score');
     $name = DB::table('users')->where('id', $_GET['customerID'])->value('name');
     $result = $score+$_GET['point'];

     DB::table('users')
           ->where('id', $_GET['customerID'])
           ->update(['score' => $result]);


    return $_GET['point'] .' add to ' . $_GET['customerID'] . ': ' . $name . ' : The result is :' . $result;

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

}
