<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RedeemCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class redeemCodeController extends Controller
{
  public function index()
  {
    $redeemCodes = Redeemcode::all();
	
	$id = Auth::id();
	$type = DB::table('users')->where('id', $id)->value('type');
	
	if($type==1)
	{
		return redirect('/');
	}

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
      session()->flash('message', 'Successfully deleted the Redeem Code!');
      return Redirect('redeemcodes');
  }
  public function create()
  {
      return View('redeemcodes.create');
  }
}
