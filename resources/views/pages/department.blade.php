@extends('layouts.app')

@section('content')
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $department->name }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset($department->image) }}" class="img-thumbnail" alt="{{ $department->name }}">
                </div>

                <div class="col-lg-8 d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                    <p>{!! $department->description !!}</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.departments',['departments' => $otherDepartments])
@endsection
