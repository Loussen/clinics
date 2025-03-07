<nav class="main-navigation">
    <div class="container">
        <div class="nav-wrapper">
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="nav-menu">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item {{ Request::is('services*') ? 'active' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item {{ Request::is('doctors*') ? 'active' : '' }}">
                    <a href="{{ route('doctors') }}">Doctors</a>
                </li>
                <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    function toggleMobileMenu() {
        document.querySelector('.nav-menu').classList.toggle('active');
        document.querySelector('.mobile-menu-toggle').classList.toggle('active');
    }
</script>
@endpush 