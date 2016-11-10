<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class userController extends Controller
{
    public function userRedeem(){{
      if (Auth::guest()) {
        return redirect("/login");
      }
      else{
        $id = Auth::id();
        $type = DB::table('users')->where('id', $id)->value('type');
        if($type==1){
          $redeemvalue = DB::table('redeemcodes')->where('redeemcode', $_GET['redeemCode'])->value('value');
          $score = DB::table('users')->where('id', $id)->value('score');
          $result = $score+$redeemvalue;
          DB::table('users')
                ->where('id', $id)
                ->update(['score' => $result]);
          DB::table('redeemcodes')->where('redeemcode',$_GET['redeemCode'])->delete();
          return redirect("/home");

        }
        else{
          return "You are shopkeeper not user";
        }
      }
    }}
    // public function userExchageReward(){{
    //   if (Auth::guest()) {
    //     return redirect("/login");
    //   }
    //   else{
    //     $id = Auth::id();
    //     $type = DB::table('users')->where('id', $id)->value('type');
    //     $name = DB::table('users')->where('id', $id)->value('name');
    //     $promotionName = DB::table('promotions')->where('promotionID', $_GET['promotionID'])->value('promotionName');
    //     if($type==1){
    //       $promotion_value = DB::table('promotions')->where('promotionID', $_GET['promotionID'])->value('value');
    //       $score = DB::table('users')->where('id', $id)->value('score');
    //       if($score>=$promotion_value){
    //           $score_left = $score-$promotion_value;
    //           DB::table('users')
    //                 ->where('id', $id)
    //                 ->update(['score' => $score_left]);
    //           return ''.$name.' is received reward name '.$promotionName.' and amount point left is '.$score_left;
    //       }
    //       else{
    //         return "not enough point";
    //       }
    //
    //     }
    //     else{
    //       return "You are shopkeeper not user";
    //     }
    //   }
    // }}
    public function index()
    {
      $users = User::where('type', 1)->get();

       // load the view and pass the nerds
       return View('users.index')
           ->with('users', $users);
    }
    public function destroy($id)
    {
      // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        session()->flash('message', 'Successfully deleted the user!');
        return Redirect('users');
    }
    public function add($id,$points)
    {
      // delete
        $user = User::find($id);
        $user->score = $user->score+$points;
        $user->save();

        // redirect
        session()->flash('message', 'Successfully Add Points!');
        return Redirect('users');
    }
    public function remove($id,$points)
    {
      // delete
        $user = User::find($id);
        if($user->score >= $points){
          $user->score = $user->score-$points;
          $user->save();
          session()->flash('message', 'Successfully Remove Points!');
        }
        else{
          session()->flash('message', 'Not enough Points!');
        }

        // redirect
        return Redirect('users');
    }
    public function show($id)
    {
      // get the nerd
        $user = User::find($id);

        // show the view and pass the nerd to it
        return View('users.show')
            ->with('user', $user);
    }

}
