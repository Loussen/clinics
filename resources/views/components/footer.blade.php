<footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home',['locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="logo d-flex align-items-center">
              <img src="{{ asset('assets/img/logo_new.png') }}" alt="Timmed">
          </a>
          <div class="footer-contact pt-3">
            <p>{{ $siteSettings->address }}</p>
            <p class="mt-3"><strong>{{ __('messages.footer_phone') }}:</strong> <span>{{ $siteSettings->phone }}</span></p>
            <p><strong>{{ __('messages.footer_email') }}:</strong> <span>{{ $siteSettings->email }}</span></p>
          </div>
          <div class="social-links d-flex mt-4">

              @foreach($siteSettings->social_profiles as $socialProfile)
                  <a href="{{ $socialProfile['link'] }}" target="_blank"><i class="bi bi-{{ $socialProfile['social_network'] }}"></i></a>
              @endforeach
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ __('messages.footer_menu_title') }}</h4>
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
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ __('messages.footer_our_services') }}</h4>
          <ul>
              @foreach(\App\Models\Services::all() as $service)
                  <li><a href="{{ route('service',['id' => $service->id,'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}">{{ $service->name }}</a></li>
              @endforeach
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ __('messages.footer_clinics') }}</h4>
          <ul>
              @foreach(\App\Models\Hospitals::all() as $hospital)
                  <li><a href="{{ route('hospital',['id' => $hospital->id,'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}">{{ $hospital->name }}</a></li>
              @endforeach
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ __('messages.footer_departments') }}</h4>
          <ul>
              @foreach(\App\Models\Departments::all() as $department)
                  <li><a href="{{ route('department',['id' => $department->id,'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}">{{ $department->name }}</a></li>
              @endforeach
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Timmed</strong> <span>{{ __('messages.footer_copyright') }}</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      </div>
    </div>

  </footer>
