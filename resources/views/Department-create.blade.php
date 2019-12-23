@extends('layouts.createsection')
 @section('content')
<div class="containerr" style="margin-top: 150px;">


@if ($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{ URL('/mydoctor/sections') }}" method="POST" enctype="multipart/form-data">
  @csrf 
                <h1>Add Department</h1>
                <input type="text" placeholder="Department" name="department" class="input">
                <input type="file" name="img" class="input" style="background-color: white;">
                <div class="submit" style="margin-top: -15px;">
                <input type="submit" class="btn" value="Add">
                </div>
   </form>
</div>
@endsection