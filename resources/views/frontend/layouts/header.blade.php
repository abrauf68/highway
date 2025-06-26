<div class="topbar">
    <div class="container-xl d-flex justify-content-between align-items-center flex-wrap">
        <div class="topbar-left d-flex align-items-center gap-3">
            <a href="{{ route('frontend.about') }}" class="topbar-link">About</a>
            <a href="{{ route('frontend.contact') }}" class="topbar-link">Contact</a>
            {{-- <a href="{{ route('frontend.pricing') }}" class="topbar-link">Pricing</a> --}}
        </div>
        <div class="topbar-center">
            <div class="ticker-wrapper">
                <div class="ticker-content">
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #029046;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #00a1ef;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #00a1ef;">5-star customer service</span>.
                    </p>
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #029046;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #00a1ef;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #00a1ef;">5-star customer service</span>.
                    </p>
                </div>
            </div>
        </div>

        <div class="topbar-right">
            <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" class="topbar-phone">
                <i class="fas fa-phone-alt me-1"></i> {{ \App\Helpers\Helper::getCompanyPhone() }}
            </a>
        </div>
    </div>
</div>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img style="height: 80px !important;" src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="">
            {{-- <h1 class="sitename">{{ \App\Helpers\Helper::getCompanyName() }}</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('frontend.home') }}"
                        class="{{ request()->routeIs('frontend.home') ? 'active' : '' }}">Home<br></a>
                </li>
                <li><a href="{{ route('frontend.about') }}"
                        class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}">About</a>
                </li>
                <li class="dropdown">
                    <a href="#"
                        class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}">
                        <span>Services</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.services') }}"
                                class="{{ request()->routeIs('frontend.services') && !request()->route('slug') ? 'active' : '' }}">
                                All Services
                            </a>
                        </li>
                        @foreach (\App\Helpers\Helper::getServices() as $service)
                            <li>
                                <a href="{{ route('frontend.services', $service->slug) }}"
                                    class="{{ request()->routeIs('frontend.services') && request()->route('slug') == $service->slug ? 'active' : '' }}">
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                {{-- <li><a href="{{ route('frontend.pricing') }}"
                        class="{{ request()->routeIs('frontend.pricing') ? 'active' : '' }}">Pricing</a></li> --}}
                {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="fas fa-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="fas fa-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('frontend.contact') }}"
                        class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
        </nav>

        <a class="btn-getstarted" style="font-size: 12px; white-space: nowrap;" href="{{ route('frontend.get-a-quote') }}">Get a Quote</a>

    </div>
</header>
