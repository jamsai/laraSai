<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usergotreward;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsergotrewardController extends Controller
{
  public function index()
  {
    $id = Auth::id();
    $issueBy = DB::table('users')->where('id', $id)->value('name');
    $type = DB::table('users')->where('id', $id)->value('type');
    if($type==1)
    {
      return redirect('/');
    }

    $usergotrewards = Usergotreward::where('issueBy', $issueBy)->get();
    return View('usergotrewards.index')
      ->with('usergotrewards', $usergotrewards);
  }
  public function destroy($id)
  {
    // delete
      $usergotrewards = Usergotreward::find($id);
      $usergotrewards->delete();

      // redirect
      session()->flash('message', 'Successfully deleted the reward!');
      return Redirect('rewards');
  }
}
