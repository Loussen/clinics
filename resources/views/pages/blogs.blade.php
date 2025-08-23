@extends('layouts.app')

@section('content')
    <!-- Departments Section -->
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title">
            <h2>{{ __('messages.blogs') }}</h2>
            <p>{{ __('messages.blogs_description') }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($blogs as $blog)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset("storage/".$blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $blog->title }}</h4>
                                <a href="{{ route('blog', ['id' => $blog->id, 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="readmore">{{ __('messages.learn_more') }} <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="d-flex justify-content-center">
                        {{ $blogs->links('components.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
