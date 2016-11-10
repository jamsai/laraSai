<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RedeemCode;

class redeemCodeController extends Controller
{
  public function index()
  {
    $redeemCodes = Redeemcode::all();

     // load the view and pass the nerds
     return View('redeemcodes.index')
         ->with('redeemCodes', $redeemCodes);
    // return "aaaaa";
  }
  public function destroy($id)
  {
    // delete
      $redeemCodes = Redeemcode::find($id);
      $redeemCodes->delete();

      // redirect
      session()->flash('message', 'Successfully deleted the Redeemcode!');
      return Redirect('redeemcodes');
  }
}
