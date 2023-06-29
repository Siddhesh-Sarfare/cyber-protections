<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-8 d-flex flex-center">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <h3 class="fw-bold logo">
                            CyberProtections
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-4">
                <div class="menu-toggle">
                    <span></span>
                </div>
                <div class="main-menu">
                    <div class="nav-menu text-right">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('resource') }}">Resource Center</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}">News</a>
                            </li>
                            <li>
                                <a href="{{ route('grievances') }}">Grievances</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="menu-dropdwon" id="more_menu">
                                <a href="#">More</a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('faqs') }}">FAQS</a></li>
                                    <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
