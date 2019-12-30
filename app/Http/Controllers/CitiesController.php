<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\city;

class CitiesController extends Controller
{

    public function create(){
        return view('add-city');
  }

  public function store(){
    request()->validate($this->rul()); 

      $cities = new city;
      $cities->city =request('city');
      $cities->city_ar =request('city_ar');
      $cities->save();

      return redirect('/mydoctor');

    }

     public function destroy($id)
    {
         city::find($id)->delete();

         return redirect()->route('page');
     }

     private function rul()
     {
         return [
            'city' => 'required',
            'city_ar' => 'required'
         ];
     }
}
