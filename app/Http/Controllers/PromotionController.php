<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Promotion;

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
      return View('promotions.edit')
          ->with('promotion', $promotion);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    // validate
      // read more on validation at http://laravel.com/docs/validation
      // $rules = array(
      //     'promotionName'       => 'required',
      //     'value'      => 'required|numeric'
      // );
      // $validator = Validator(input::all(), $rules);
      //
      // // process the login
      // if ($validator->fails()) {
      //     return Redirect('promotions/' . $id . '/edit')
      //         ->withErrors($validator);
      // } else {
          // store
          $promotion = Promotion::find($id);
          $promotion->promotionName       = input::get('promotionName');
          $promotion->value      = input::get('value');
          $promotion->description      = input::get('description');
          $promotion->expired = input::get('bday');
          $promotion->issueBy = input::get('issueBy');
          $promotion->save();

          // redirect
          session()->flash('message', 'Successfully updated promotion!');
          return Redirect('promotions');
      // }
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
