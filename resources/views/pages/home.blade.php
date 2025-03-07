@extends('layouts.app')

@section('title', 'Welcome to Clinics - Your Health is Our Priority')

@section('content')
    @include('includes.hero')
    @include('includes.featured-services')
    @include('includes.call-to-action')
    @include('includes.about')
    @include('includes.stats')
    @include('includes.features')
    @include('includes.services')
    @include('includes.appointment')
    @include('includes.departments')
    @include('includes.testimonials')
    @include('includes.doctors')
    @include('includes.gallery')
    @include('includes.pricing')
    @include('includes.faq')
    @include('includes.contact')
@endsection

@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/img/hero-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 150px 0;
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .feature-box {
            text-align: center;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 5px;
        }

        .feature-box i {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .service-card {
            background: white;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card h3 {
            padding: 20px;
            margin: 0;
        }

        .service-card p {
            padding: 0 20px;
        }

        .service-card .read-more {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .appointment-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .working-hours {
            background: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .working-hours ul {
            list-style: none;
            padding: 0;
        }

        .working-hours li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
    </style>
@endpush
