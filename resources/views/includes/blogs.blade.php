<!-- Departments Section -->
<section id="tabs" class="tabs section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Blogs</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    @foreach($blogs as $blog)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->index === 0 ? 'active show' : '' }}" data-bs-toggle="tab" href="#tabs-tab-{{ $loop->index }}">
                                {{ $blog->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach($blogs as $blog)
                        <div class="tab-pane {{ $loop->index === 0 ? 'active show' : '' }}" id="tabs-tab-{{ $loop->index }}">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{ $blog->title }}</h3>
                                    <p class="fst-italic">{!! $blog->description !!}</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset("storage/".$blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
