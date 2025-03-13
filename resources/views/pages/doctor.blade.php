@extends('layouts.app')

@section('content')
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $doctor->full_name }}</h2>
            <span class="mb-3">{{ $doctor->speciality }}</span>
        </div>
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset($doctor->image) }}" class="img-thumbnail" alt="{{ $doctor->full_name }}">
                </div>

                <div class="col-lg-8 d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                    <p>{!! $doctor->description !!}</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.doctors',['doctors' => $otherDoctors])
@endsection
