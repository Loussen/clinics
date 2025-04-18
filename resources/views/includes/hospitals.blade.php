<!-- Departments Section -->
<section id="doctors" class="doctors section light-backgroundn">
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Hospitals</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>

<div class="container">
    <div class="row gy-4">
        @foreach($hospitals as $hospital)
            <div class="col-lg-4 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset("storage/".$hospital->image) }}" class="img-fluid" alt="{{ $hospital->name }}">
                    </div>
                    <div class="member-info">
                        <h4>{{ $hospital->name }}</h4>
                        <a href="{{ route('hospital', ['id' => $hospital->id, 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="row mt-5">
        <div class="col-12">
            <nav class="d-flex justify-content-center">
                <a href="{{ route('hospitals',['locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="btn btn-outline-info">More hospital</a>
            </nav>
        </div>
    </div>
</div>
</section>
