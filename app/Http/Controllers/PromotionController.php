<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Promotion;
use Illuminate\Support\Facades\Input;

class PromotionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $promotions = Promotion::all();

     // load the view and pass the nerds
     return View('promotions.index')
         ->with('promotions', $promotions);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return View('promotions.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    // get the nerd
      $promotion = Promotion::find($id);

      // show the view and pass the nerd to it
      return View('promotions.show')
          ->with('promotion', $promotion);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $promotion = Promotion::find($id);

      // show the edit form and pass the nerd
      //return var_dump($promotion);
      return View('promotions.edit')
          ->with('promotion', $promotion);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  // public function editPromotion()
  // {
  //   DB::table('promotions')
  //           ->where('id', $_GET['promotionID'])
  //           ->update(['promotionName' => $_GET['promotionName']])
  //           ->update(['description' => $_GET['description']])
  //           ->update(['value' => $_GET['value']])
  //           ->update(['bday' => $_GET['bday']]);
  //   return var_dump($_GET);
  // }
  public function update($id)
  {

            $promotion = Promotion::find($id);
            $promotion->PromotionName   = Input::get('promotionName');
            $promotion->value      = Input::get('value');
            $promotion->save();
            return redirect('promotions');
    // DB::table('promotions')
    //         ->where('id', $_GET['promotionID'])
    //         ->update(['promotionName' => $_GET['promotionName']])
    //         ->update(['description' => $_GET['description']])
    //         ->update(['value' => $_GET['value']])
    //         ->update(['bday' => $_GET['bday']]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    // delete
      $promotion = Promotion::find($id);
      $promotion->delete();

      // redirect
      session()->flash('message', 'Successfully deleted the promotion!');
      return Redirect('promotions');
  }
  public function getReward($id)
    {
      // delete
        $promotion = Promotion::find($id);
        //return var_dump($promotion);
        $id = Auth::id();
        $type = DB::table('users')->where('id', $id)->value('type');
        $name = DB::table('users')->where('id', $id)->value('name');
        $score = DB::table('users')->where('id', $id)->value('score');

          if($score>=$promotion->value){
              $score_left = $score-$promotion->value;
              DB::table('users')
                    ->where('id', $id)
                    ->update(['score' => $score_left]);
                    session()->flash('message', 'You got the reward');
          }
          else{
            session()->flash('message', 'Not enough point');
          }
        // redirect
        return Redirect('promotions');

  }
}
