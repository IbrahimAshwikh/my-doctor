<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
     <style>
          .input{
               margin-bottom: 10px;
          }
     </style>
    </head>

<body style="background: linear-gradient(#2f7cc9, transparent);">

<div class="containerr" style="margin-top: 40px;">
  <form action="{{ URL('/mydoctor') }}" method="POST" enctype="multipart/form-data">
  @csrf 
                <h1 style="margin-bottom: 5px; margin-top: 10px;">Add Doctors</h1>
                <input type="text" placeholder="Doctor Name" name="name" class="input">
                <input type="text" placeholder="Hospital" name="hospital" class="input">
                <select name="section" class="input">
                      @foreach ($departments as $department)
                          <option value="{{ $department->id }}"> {{ $department->department }} </option>
                      @endforeach
                </select>
                <input type="text" placeholder="City" name="city" class="input">
                <input type="text" placeholder="Place" name="place" class="input">
                <input type="text" placeholder="phone Number" name="phone" class="input">
                <input type="file" name="img" class="input" style="background-color: white;">
                <div class="msg">
                        <textarea class="area" name="description" placeholder="Leave a Message"></textarea>
                </div>
                <div class="submit" style="margin-top: -20px;">
                <input type="submit" class="btn" value="Add" style="margin-top: -5px;">
                </div>
   </form>
</div>

</body>
</html>