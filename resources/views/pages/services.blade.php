@extends('layouts.app')

@section('content')
    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.services') }}</h2>
            <p>{{ __('messages.services_description') }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h3>{{ $service->name }}</h3>
                            <p>{{ $service->short_description }}</p>
                            <a href="{{ route('service',['id' => $service->id, 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="readmore stretched-link">{{ __('messages.learn_more') }} <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="d-flex justify-content-center">
                        {{ $services->links('components.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
