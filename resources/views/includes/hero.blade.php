<!-- Hero Section -->
<section id="hero" class="hero section">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        @foreach($sliders as $slider)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset("storage/".$slider->image) }}" alt="{{ $slider->title }}">
                <div class="container">
                    <h2>{{ $slider->title }}</h2>
                    <p>{{ $slider->description }}</p>
                    <a href="{{ $slider->url }}" class="btn-get-started">Read More</a>
                </div>
            </div>
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>
    </div>
</section>
