<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">
    <div class="container">
        <div class="row gy-4">
            @foreach($siteServices as $siteService)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="{{ $siteService['icon'] }} icon"></i></div>
                        <h4><a href="" class="stretched-link">{{ $siteService['title'] }}</a></h4>
                        <p>{{ $siteService['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
