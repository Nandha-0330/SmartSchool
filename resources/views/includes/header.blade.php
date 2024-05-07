<header class="site-header header mo-left">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="{{ route('home') }}" class="dez-page"><img src="{{ asset('build/images/logo.png') }}" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header mostion">
                        <a href="{{ route('home')}}" class="dez-page"><img src="{{ asset('build/images/logo-black.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->routeIs('courses') ? 'active' : '' }}"><a href="{{ route('courses') }}">Courses</a></li>
                        <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}">Our Gallery</a></li>
                        <li class="{{ request()->routeIs('contact_us') ? 'active' : '' }}"><a href="{{ route('contact_us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>

<script>
    // JavaScript code for setting active state dynamically
    $(document).ready(function() {
        var path = window.location.pathname;
        $('ul.navbar-nav li').removeClass('active');
        $('ul.navbar-nav li a').each(function() {
            if ($(this).attr('href') === path) {
                $(this).closest('li').addClass('active');
            }
        });
    });
</script>
