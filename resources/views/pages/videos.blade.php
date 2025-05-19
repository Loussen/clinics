@extends('layouts.app')

@section('content')
    <!-- Departments Section -->
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Video gallery</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($videos as $video)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                @php
                                    $videoId = youtube_embed($video->url); // funksiyanı istifadə et
                                @endphp

                                @if($videoId)
                                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
                                @else
                                    <span class="text-danger">Invalid YouTube URL</span>
                                @endif
                            </div>
                            <div class="member-info">
                                <h4>{{ $video->title ?? 'No Title' }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="d-flex justify-content-center">
                        {{ $videos->links('components.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
