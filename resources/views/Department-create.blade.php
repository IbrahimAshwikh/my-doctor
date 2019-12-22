<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Department</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">

    </head>

<body style="background: linear-gradient(#2f7cc9, transparent);">
<div class="containerr" style="margin-top: 150px;">
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
</body>
</html>