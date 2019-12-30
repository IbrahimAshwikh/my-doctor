
   @extends('layouts.main')

   @section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('img/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center pl-5">
                        <h1 class="mb-4">Find your doctor<br></h1><h1>We are here for you</h1>
                        <!-- <p style="font-size: 18px;"></p> -->
                        <form action="{{ URL('/mydoctor/search') }}" method="POST" class="search-location mt-md-5">
                         @csrf 
                            <div class="row justify-content-center">
                                <div class="col-lg-10 align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="text" class="form-control" name="search" placeholder="Search here....">
                                            <button><span class="ion-ios-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#department" class="mouse-icon">
                <div class="mouse-wheel" style="margin: 2px auto 0; font-size: 30px;"><span class="ion-ios-arrow-down"></span></div>
            </a>
        </div>
    </div>

    <!-- slide start-->
    <a name="department"></a>
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-0 element-animate">
                <div class="col-md-8 text-center mb-2">
                    <h2 class="text-uppercase heading border-bottom mb-4"><b>DEPARTMENTS</b></h2>
                    <p class="mb-0 lead">We hope you get well as soon as possible</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-2 owl-carousel">
                    
                @foreach($departments as $department)
                    <div>
                        <div class="media d-block media-custom text-left">
                            <a href="{{ route('all',['id' => $department->id])}}"><img src="{{ asset(Storage::url($department->img)) }}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">

                                <h3 class="mt-0 text-black"><a href="{{ route('all',['id' => $department->id])}}" class="text-black">{{ $department->department }}<br> Department</a></h3>
                                <p>Specialized Hospitals &amp; Doctors .</p>
                                <p class="clearfix">
                                    <a href="{{ route('all',['id' => $department->id])}}" class="float-left" style="margin-top: -30px;">Read more</a><br>
                                </p>
                                @auth
                                <a href="{{ route('edit-section', ['id'=>$department->id]) }}" class="btn btn-info" >Edit</a>
                                <form action="{{ route('destroy-section',['id'=>$department->id]) }}" method="post" style="display: inline; padding-left: 100px;">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                         @csrf
                                         @method('DELETE')
                                </form>
                                @endauth


                            </div>
                        </div>
                    </div>
                @endforeach

                   
                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>


 
    <!-- slide end-->
    <a name="Quotes"></a>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(img/bbgg.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">Medical Quotes</h2>
                        <ul>
                            <li>"Sometimes the remedy is worse then the disease." <br><strong style="margin-left: 300px;">Francis Bacon</strong></br>
                            </li>
                            <li>"When the heart is at ease, the body is healthy." <br><strong style="margin-left: 300px;">Chinese</strong></br>
                            </li>
                            <li>"To keep the body in good health is a duty... otherwise we shall not be able to keep our mind strong and clear." <br><strong style="margin-left: 130px;">Buddha</strong></br>
                            </li>
                            <li>"Good health is not something we can buy. However, it can be an extremely valuable savings account." <br><strong style="margin-left: 50px;">Anne Wilson Schaef</strong></br>
                            </li>
                            <li>"Good health and good sense are two of life's greatest blessings."<br><strong style="margin-left: 400px;">Publilius Syrus</strong></br>
                            </li>
                            <li>"Happiness is nothing more than good health and abad memory." <br><strong style="margin-left: 390px;">Albert Schweitzer</strong></br>
                            </li>
                            <li>"The foundation of success in life is good health, it is also the basis of happiness." <br><strong style="margin-left: 450px;">P.T.Barnum</strong></br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
  @endsection
