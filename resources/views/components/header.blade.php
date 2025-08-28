<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="d-none d-md-flex align-items-center">
                <i class="bi bi-clock me-1"></i> {{ $siteSettings->work_hours }}
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone me-1"></i> {{ __('messages.header_call_us') }} {{ $siteSettings->phone }}
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-end">
            <a href="{{ route('home',['locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/logo_new.png') }}" alt="Timmed">
                <!-- Uncomment the line below if you also wish to use a text logo -->
{{--                <h1 class="sitename">Timmed</h1>--}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @foreach (\App\Models\MenuItem::getTree() as $item)
                        <li>
                            @php
                                if($item->type == 'internal_link') {
                                    $link = route($item->link, ['locale' => \Illuminate\Support\Facades\App::getLocale()]);
                                } elseif($item->type == 'page_link') {
                                    $link = route('page',['slug' => $item->page->slug, 'locale' => \Illuminate\Support\Facades\App::getLocale()]);
                                } else {
                                    $link = $item->link;
                                }
                            @endphp
                            <a href="{{ $link }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                        <li class="dropdown ms-3">
                            <a href="javascript:void(0);"><span>{{ app()->getLocale() }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                @foreach(config('data.locales') as $locale => $language)
                                    <li>
                                        @php
                                            $params = ['locale' => $locale];

                                            // Əgər route `page`-dirsə, `slug`-u əlavə edirik
                                            if (\Illuminate\Support\Facades\Route::currentRouteName() === 'page') {
                                                $params['slug'] = request()->route('slug');
                                            } else {
                                                $params['id'] = request()->route('id');
                                            }
                                        @endphp
                                        <a href="{{ route(Route::currentRouteName(), $params) }}">{{ $language }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="{{ route('home',['locale' => \Illuminate\Support\Facades\App::getLocale()]) }}#appointment">{{ __('messages.header_appointment_button') }}</a>
        </div>
    </div>
</header>
