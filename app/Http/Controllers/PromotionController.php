<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function create(){{
        //return $_POST['username'];
          DB::table('promotions')->insert([
          'promotionName' => $_GET['promotionName'],
          'description' => $_GET['description'],
          'issueBy' => $_GET['issueBy'],
          'expired' => $_GET['bday'],
          'value' => $_GET['value']]);
        return '555';

    }
  }
}
