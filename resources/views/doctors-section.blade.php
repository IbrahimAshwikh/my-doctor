@extends('layouts.section')
@section('style')
      <style>
         #h{
            text-align: center !important; padding-bottom: 0px; font-size: 30px; margin-bottom: -30px; margin-top: 40px; color: white !important;
         }
        #h:hover{
            text-align: center !important; padding-bottom: 0px; margin-bottom: -30px; margin-top: 40px; color: #007bff !important;
         }
      </style>
@endsection
@section('drop')
     <div class="dropdown-menu dropdown-menu-right mr-5"style="background: linear-gradient(#6caae9, transparent);">
        <a class="dropdown-item" href="{{ route('all',['id' => $section->id])}}">All</a> 
        @foreach($cities as $city2)
             <a class="dropdown-item" href="{{ route('all',['id' => $section->id, 'id2' => $city2->id])}}">{{ $city2->city }}
                @auth
                   <form action="{{ route('destroy-city',['id'=>$city2->id]) }}" method="post" style=" float: right; ">
                         <button class="btn btn-danger btn-xs" style="margin-top: -5px; 50%; height: 30px; width: 20px; margin-left: -5px;"><p style="margin-left: -5px; margin-top: -4px;">X</p></button>
                          @csrf
                         @method('DELETE')
                   </form>
                 @endauth
             </a>
        @endforeach
            <a class="dropdown-item" href="{{ route('create-city') }}">Add New City+</a>
    </div>
@endsection
     @section('content')
    <div class="overlay"></div>
    <section class="specialist-area section-padding">
        <h2 style="text-align: center; padding-bottom: 60px; margin-top: 0px;">Best Doctors For <strong style="color: #007bff;">{{ $section->department }}</strong></h2>
        <div class="container">
            <div class="row">
            @forelse($doctors as $doctor)
                <div class="col-lg-3 col-sm-6 mb-5 text-center">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset(Storage::url($doctor->img)) }}" alt="Doctor Image" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr::{{ $doctor->name }}</h3>
                                <h6>Hospital::{{ $doctor->hospital }}<br>Place::{{ $doctor->place }}<br>Phone::{{ $doctor->phone }}<br>City::{{ $doctor->doctorCity->city }}</h6>
                                @auth
                                <a href="{{ route('edit', ['id'=>$doctor->id]) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('destroy',['id'=>$doctor->id]) }}" method="post" style="display: inline; padding-left: 100px;">
                            
                                <input type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                @method('DELETE')
                                </form>
                               
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                </div>
                    @if($city)
                       <h2 style="text-align: center; padding-bottom: 0px; margin-bottom: -50px; margin-top: 30px;">Oops we don't know doctors in <strong style="color: #007bff;">{{ $city->city }}</strong></h2><br>
                       <h2 id="h"><a href="{{ route('contactus') }}" id="h"><u>Help us to find some</u></a></h2>
                     @endif
                 @endforelse
            </div>
        <div class="d-flex justify-content-center pt-4" style="margin-bottom: -120px;">
             {{ $doctors->links()}}
        </div>
        </div>
    </section>
    @endsection
   