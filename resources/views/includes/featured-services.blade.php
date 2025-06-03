<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">
    <div class="container">
        <div class="row gy-4">
            @php
//                $siteServices = json_decode($siteSettings->site_services,true);
                $siteServices = \App\Models\Services::all();
            @endphp
            @foreach($siteServices as $siteService)
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="{{ $siteService['icon'] }} icon"></i></div>
                        <h4><a href="{{ route('service', ['id' => $siteService['id'], 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="stretched-link">{{ $siteService['name'] }}</a></h4>
                        <p>{{ $siteService['short_description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
