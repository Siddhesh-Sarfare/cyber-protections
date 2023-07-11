<!-- navigation -->
<nav class="shadow-sm navbar fixed-top navbar-expand-xl mdc-bg-grey-100">
    <a href="{{ route('admin.roles.index') }}" class="navbar-brand">Cyber Protections - {{ Auth::user()->name }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
            <!-- Roles  -->
            {{-- <li class="nav-item dropdown {{ request()->is('admin/roles*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Roles
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.roles.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.roles.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.roles.deleted.show') }}">Deleted Roles</a>
                </div>
            </li> --}}
            <!-- /Roles -->
            <!-- Category -->
            <li class="nav-item dropdown {{ request()->is('admin/GalleryCategory*') ? 'active' : '' }} {{ request()->is('admin/FaqCategory*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
            
            
                <ul class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">

                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Gallery Category</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.GalleryCategory.index') }}">Show All</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.GalleryCategory.create') }}">Create New</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.GalleryCategory.deleted.show') }}">Deleted </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">FAQ Category</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.FaqCategory.index') }}">Show All</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.FaqCategory.create') }}">Create New</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.FaqCategory.deleted.show') }}">Deleted</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </li>
            

            <li class="nav-item dropdown {{ request()->is('admin/resource*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Resources
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.resource.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.resource.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.resource.deleted.show') }}">Deleted</a>
                </div>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/news*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    News
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.news.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.news.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.news.deleted.show') }}">Deleted</a>
                </div>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    FAQ
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.faq.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.faq.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.faq.deleted.show') }}">Deleted</a>
                </div>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/blog*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.blog.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.blog.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.blog.deleted.show') }}">Deleted</a>
                </div>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/gallery*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Gallery
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.gallery.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.gallery.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.gallery.deleted.show') }}">Deleted </a>
                </div>
            </li>

            <!-- /Category -->
            <!-- Account -->
            {{-- <li class="nav-item dropdown {{ request()->is('admin/accounts*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Accounts
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.accounts.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.accounts.create') }}">Create New</a>
                    <a class="dropdown-item" href="{{ route('admin.accounts.deleted.show') }}">Deleted Accounts</a>
                </div>
            </li> --}}
            <!-- /Account -->
            <!-- Feedback -->
            <li class="nav-item dropdown {{ request()->is('admin/feedback*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Feedback
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.feedback.index') }}">Show All</a>
                </div>
            </li>
            <!-- /Feedback -->
            <!-- SEO -->
            <li class="nav-item dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    SEO
                </a>
                <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.seo.index') }}">Show All</a>
                    <a class="dropdown-item" href="{{ route('admin.seo.create') }}">Create New</a>
                </div>
            </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out-alt "></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /navigation -->
