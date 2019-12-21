<?php

namespace App\Http\Controllers;

use App\section;

class SectionController extends Controller
{
    public function Home(){
        $departments = section::latest()->get();

        return view('Mydoctor', ['departments'=>$departments]);
    }
    public function create(){
        return view('Department-create');
  }

  public function store(){
      request()->validate([
          'department' => 'required',
          'img' => 'required|image'
      ]);

      $departments = new section;
      $departments->department =request('department');
      $departments->img = request()->file('img')->store('public');
      $departments->save();

      return redirect('/mydoctor');

    }
}
