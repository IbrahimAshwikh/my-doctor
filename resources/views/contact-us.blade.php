
    @extends('layouts.contactus')

       @section('content')
       <section>
    <div class="hero-wrap pt-5" style="background-image: url('{{ asset('img/department2.jpg') }}') ; height: 100% !important; margin-bottom: 50px !important;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">



         <form action="  {{ url('/contact-us') }} " method="post">
           @csrf
            <div class="containerr">

                     @if ($errors->count())
        <div class="alert alert-danger" style="background: linear-gradient(red, transparent); margin-top: -100px; margin-bottom: 110px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: white;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            
                 <h1 style="margin-top: -100px;">CONTACT US</h1>
                 <h1 style="font-size: 25px !important; color: black !important; margin-top: -30px !important;">Tell us if you know any good doctors</h1>
                <div class="login">
                      <input type="text" name="name" placeholder="Your Name" class="input">
                      <input type="text" name="Email" placeholder="Your Email" class="input">
                </div>

                <div class="supject">
                         <input type="text"name="Subject" placeholder="Subject" class="input">
                </div>

                <div class="msg">
                        <textarea class="area"name="Message" placeholder="Leave a Message"></textarea>
                </div>

                <input type="submit" class="mouse-icon" value="Send">
            </div>
            </form>
       </div>
    </div>
</section>
    @endsection


