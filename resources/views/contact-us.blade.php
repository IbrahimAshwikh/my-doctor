
    @extends('layouts.contactus')

       @section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('img/bg.jpg') }}') ;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

         <form action="  {{ url('/contact-us') }} " method="post">
           @csrf
            <div class="containerr">
            
                 <h1>CONTACT US</h1>
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
                </form>
            </div>
        </div>
       
    </div>

    @endsection

