@extends('layouts.section')
     @section('content')
    <div class="overlay"></div>
    <section class="specialist-area section-padding">
        <h2 style="text-align: center; padding-bottom: 60px; margin-top: 0px;">Best Doctors For <strong style="color: #007bff;">{{ $section->department }}</strong></h2>
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                @if( $section->id == $doctor->section)
                <div class="col-lg-3 col-sm-6 mb-5 text-center">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset(Storage::url($doctor->img)) }}" alt="Doctor Image" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>{{ $doctor->name }}</h3>
                                <h6>Hospital::{{ $doctor->hospital }}<br>Place::{{ $doctor->place }}<br>Phone::{{ $doctor->phone }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach               
            </div>
        </div>
    </section>
    @endsection
   