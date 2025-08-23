<!-- Faq Section -->
<section id="faq" class="faq section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('messages.faq') }}</h2>
        <p>{{ __('messages.faq_description') }}</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-container">
                    @foreach($faqs as $faq)
                        <div class="faq-item">
                            <h3>{{ $faq->question }}</h3>
                            <div class="faq-content">
                                <p>{{ $faq->answer }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
