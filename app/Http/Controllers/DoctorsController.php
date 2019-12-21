<?php

namespace App\Http\Controllers;

use App\doctor;
use App\section;


class DoctorsController extends Controller
{
    public function Sections($id){
        
        $doctors = doctor::latest()->get();

        $section = section::find($id);

        return view('doctors-section', ['doctors'=>$doctors])->with('section',$section); 
   }

    public function create(){

        $departments = section::latest()->get();
          return view('add-doctors',  ['departments'=>$departments]);
    }

    public function store(){

        request()->validate([
            'name' => 'required',
            'hospital' => 'required',
            'section' => 'required',
            'city' => 'required',
            'place' => 'required',
            'img' => 'required|image'
        ]);

        $doctors = new doctor;
        $doctors->name =request('name');
        $doctors->hospital =request('hospital');
        $doctors->section =request('section');
        $doctors->city =request('city');
        $doctors->place =request('place');
        $doctors->phone =request('phone');
        $doctors->description =request('description');
        $doctors->img = request()->file('img')->store('public');
        $doctors->save();

        return redirect("mydoctor/section/$doctors->section");
  }

}
