<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title"></div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>

            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">{{@$seoSetting->title}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">DW</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ setSidebarActive(['dashboard']) }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>


            <li class="nav-item dropdown {{ setSidebarActive(['admin.hero.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Hero</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.hero.*']) }}">
                        <a class="nav-link" href="{{ route('admin.hero.index') }}">Hero Section</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ setSidebarActive(['admin.service.*', 'admin.service-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Services</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.service.*']) }}">
                        <a class="nav-link" href="{{ route('admin.service.index') }}">Services Item</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.service-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.service-section-setting.index') }}">Section
                            Setting</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ setSidebarActive(['admin.typer-title.*', 'admin.about.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>About</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.typer-title.*']) }}">
                        <a class="nav-link" href="{{ route('admin.typer-title.index') }}">Typer Title</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.about.*']) }}">
                        <a class="nav-link" href="{{ route('admin.about.index') }}">About Section</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ setSidebarActive(['admin.category.*', 'admin.portfolio-item.*', 'admin.portfolio-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Portfolio</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.category.index') }}">Category</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.portfolio-item.*']) }}">
                        <a class="nav-link" href="{{ route('admin.portfolio-item.index') }}">Portfolio Item</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.portfolio-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.portfolio-section-setting.index') }}">Section
                            Setting</a>
                    </li>
                </ul>
            </li>

            {{-- Blog --}}
            <li class="nav-item dropdown {{ setSidebarActive(['admin.blog-category.*', 'admin.blog.*', 'admin.blog-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Blog</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.blog-category.*']) }}"><a class="nav-link" href="{{ route('admin.blog-category.index') }}">Category</a></li>
                    <li class="{{ setSidebarActive(['admin.blog.*']) }}"><a class="nav-link" href="{{ route('admin.blog.index') }}">Blog List</a></li>
                    <li class="{{ setSidebarActive(['admin.blog-section-setting.*']) }}"><a class="nav-link" href="{{ route('admin.blog-section-setting.index') }}">Section
                            Setting</a></li>
                </ul>
            </li>
            {{-- END Blog --}}

            <li class="nav-item dropdown {{ setSidebarActive(['admin.gallery-album.*', 'admin.gallery.*', 'admin.gallery-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Gallery</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.gallery-album.*']) }}"><a class="nav-link" href="{{ route('admin.gallery-album.index') }}">Album</a></li>
                    <li class="{{ setSidebarActive(['admin.gallery.*']) }}"><a class="nav-link" href="{{ route('admin.gallery.index') }}">Photos</a></li>
                    <li class="{{ setSidebarActive(['admin.gallery-section-setting.*']) }}"><a class="nav-link" href="{{ route('admin.gallery-section-setting.index') }}">Section
                            Setting</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ setSidebarActive(['admin.krf.*', 'admin.krfimage.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Kelas Riset Film</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.krfimage.*']) }}"><a class="nav-link" href="{{ route('admin.krfimage.index') }}">Krf Image</a></li>
                    <li class="{{ setSidebarActive(['admin.krf.*']) }}"><a class="nav-link" href="{{ route('admin.krf.index') }}">Krf Section</a></li>
                </ul>
            </li>

            {{-- Contact --}}
            <li class="nav-item dropdown {{ setSidebarActive(['admin.contact-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Contact</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.contact-section-setting.*']) }}"><a class="nav-link" href="{{ route('admin.contact-section-setting.index') }}">Section
                            Setting</a></li>
                </ul>
            </li>
            {{-- Contact --}}

            {{-- footer --}}
            <li
                class="nav-item dropdown {{ setSidebarActive([
                    'admin.footer-social.*',
                    'admin.footer-info.*',
                    'admin.footer-contact-info.*',
                    'admin.footer-useful-links.*',
                    // 'admin.footer-help-links.*'
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i>
                    <span>Footer</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="{{ setSidebarActive(['admin.footer-social.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-social.index') }}">Social Links</a></li>
                    <li class="{{ setSidebarActive(['admin.footer-info.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-info.index') }}">Footer Information</a></li>
                    <li class="{{ setSidebarActive(['admin.footer-contact-info.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-contact-info.index') }}">Footer Contact Info</a></li>
                    <li class="{{ setSidebarActive(['admin.footer-useful-links.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-useful-links.index') }}">Footer Useful Link</a></li>
                    {{-- <li class="{{ setSidebarActive(['admin.footer-help-links.*']) }}"><a class="nav-link" href="{{ route('admin.footer-help-links.index') }}">Footer Help Link</a></li> --}}
                </ul>
            </li>
            {{-- footer --}}

            <li class="menu-header">Settings</li>

            {{-- Setting --}}
            <li class="{{ setSidebarActive(['admin.setting.*']) }}">
                <a class="nav-link" href="{{ route('admin.setting.index') }}"><i class="far fa-square"></i>
                    <span>Settings</span>
                </a>
            </li>
            {{-- Setting --}}



            {{-- <li>
                <a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                    <span>Blank Page</span>
                </a>
            </li> --}}
        </ul>
    </aside>
</div>
