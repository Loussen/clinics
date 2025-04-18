<!-- Departments Section -->
<section id="tabs" class="tabs section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Departments</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    @foreach($departments as $department)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->index === 0 ? 'active show' : '' }}" data-bs-toggle="tab" href="#tabs-tab-{{ $loop->index }}">
                                {{ $department->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach($departments as $department)
                        <div class="tab-pane {{ $loop->index === 0 ? 'active show' : '' }}" id="tabs-tab-{{ $loop->index }}">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{ $department->name }}</h3>
                                    <p class="fst-italic">{!! $department->description !!}</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset("storage/".$department->image) }}" alt="{{ $department->name }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
