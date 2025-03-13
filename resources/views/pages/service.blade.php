@extends('layouts.app')

@section('content')
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $service->name }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p>{!! $service->description !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
