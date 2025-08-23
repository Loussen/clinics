@extends('layouts.app')

@section('content')
    <!-- Doctors Section -->
    <section id="doctors" class="doctors section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.doctors') }}</h2>
            <p>{{ __('messages.doctors_description') }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset("storage/".$doctor->image) }}" class="img-fluid" alt="{{ $doctor->full_name }}">
                                <div class="social">
                                    @foreach($doctor->social_profiles as $socialProfile)
                                        <a href="{{ $socialProfile['link'] }}"><i class="bi bi-{{ $socialProfile['social_network'] }}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $doctor->full_name }}</h4>
                                <span class="mb-3">{{ $doctor->speciality }}</span>
                                <span class="mb-3" style="color: var(--accent-color); font-size: 15px;">{{ $doctor->hospital->name ?? '' }}</span>
                                <a href="{{ route('doctor', ['id' => $doctor->id, 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="readmore">{{ __('messages.learn_more') }} <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="d-flex justify-content-center">
                        {{ $doctors->links('components.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
