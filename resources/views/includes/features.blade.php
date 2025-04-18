<!-- Features Section -->
<section id="features" class="features section">
    <div class="container">
        <div class="row justify-content-around gy-4">
            <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset("storage/".$features->image) }}" alt="{{ $features->title }}">
            </div>

            <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h3>{{ $features->title }}</h3>
                <p>{{ $features->description }}</p>

                @php
                    $featuresItems = $features->features ? json_decode($features->features, true) : [];
                @endphp

                @forelse($featuresItems as $featuresItem)
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="{{ $featuresItem['icon'] }} flex-shrink-0"></i>
                        <div>
                            <h4><a href="javascript:void(0);" class="stretched-link">{{ $featuresItem['title'] }}</a></h4>
                            <p>{{ $featuresItem['description'] }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No features found.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
