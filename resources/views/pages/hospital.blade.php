@extends('layouts.app')

@section('content')
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $hospital->name }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset("storage/".$hospital->image) }}" class="img-thumbnail" alt="{{ $hospital->name }}">
                </div>

                <div class="col-lg-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p>{!! $hospital->description !!}</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.doctors',['doctors' => $hospitalDoctors])
@endsection
