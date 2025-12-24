<header>
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <img 
                    src="{{ asset('storage/' . settings()['favicon']) }}" 
                    alt="Logo"
                    style="height:3rem; width:auto;"
                    class="me-2"
                >
                <span class="text-primary fs-4">
                    {{ settings()['title'] ?? 'MyApp' }}
                </span>
            </a>

            
            <!-- Desktop Navigation -->
            <div class="d-none d-lg-flex align-items-center">
                <ul class="navbar-nav me-4">
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#hero" 
                           data-bs-toggle="tooltip" title="Home">
                            <i class="bi bi-house me-1"></i> Home
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#about" 
                           data-bs-toggle="tooltip" title="Profile">
                            <i class="bi bi-info-circle me-1"></i> Profile
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#struktur" 
                           data-bs-toggle="tooltip" title="Struktur">
                            <i class="bi bi-diagram-3 me-1"></i> Struktur
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#gallery" 
                           data-bs-toggle="tooltip" title="Gallery">
                            <i class="bi bi-images me-1"></i> Gallery
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#events" 
                           data-bs-toggle="tooltip" title="Kegiatan">
                            <i class="bi bi-calendar-event me-1"></i> Kegiatan
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#contact" 
                           data-bs-toggle="tooltip" title="Kontak">
                            <i class="bi bi-envelope me-1"></i> Kontak
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                </ul>
                
                <!-- Auth Buttons Desktop -->
                <div class="d-flex align-items-center">
                    @auth
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" 
                               id="userDropdown" data-bs-toggle="dropdown">
                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                                     style="width: 36px; height: 36px;">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="text-dark fw-medium">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-person me-2"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-gear me-2"></i> Settings
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center text-danger">
                                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-person-plus me-1"></i> Register
                        </a>
                    @endauth
                </div>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="navbar-toggler border-0 d-lg-none" type="button" 
                    data-bs-toggle="offcanvas" data-bs-target="#mobileSideNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Side Navigation (Offcanvas) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileSideNav" 
         aria-labelledby="mobileSideNavLabel">
        <div class="offcanvas-header border-bottom">
            <div class="d-flex align-items-center">
                <img 
                    src="{{ asset('storage/' . settings()['favicon']) }}" 
                    alt="Logo"
                    style="height: 40px; width: auto;"
                    class="me-3"
                >
                <div>
                    <h5 class="offcanvas-title fw-bold mb-0" id="mobileSideNavLabel">
                        {{ settings()['title'] ?? 'MyApp' }}
                    </h5>
                    <small class="text-muted">Navigation Menu</small>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body p-0">
            <!-- User Info (if logged in) -->
            @auth
                <div class="bg-light p-4 border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                             style="width: 50px; height: 50px; font-size: 1.2rem;">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                            <small class="text-muted">{{ Auth::user()->email }}</small>
                        </div>
                    </div>
                </div>
            @endif
            
            <!-- Mobile Navigation Links -->
            <nav class="nav flex-column">
                <div class="nav-header p-3 bg-light">
                    <small class="text-uppercase text-muted">Main Menu</small>
                </div>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#home">
                    <div class="nav-icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-house text-primary"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Home</span>
                        <small class="text-muted d-block">Back to homepage</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#about">
                    <div class="nav-icon-wrapper bg-info bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-info-circle text-info"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Profile</span>
                        <small class="text-muted d-block">Learn more about us</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#struktur">
                    <div class="nav-icon-wrapper bg-success bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-diagram-3 text-success"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Struktur</span>
                        <small class="text-muted d-block">Organizational structure</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#gallery">
                    <div class="nav-icon-wrapper bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-images text-warning"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Gallery</span>
                        <small class="text-muted d-block">Photo collection</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#events">
                    <div class="nav-icon-wrapper bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-calendar-event text-danger"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Kegiatan</span>
                        <small class="text-muted d-block">Activities & events</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#contact">
                    <div class="nav-icon-wrapper bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-envelope text-secondary"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Kontak</span>
                        <small class="text-muted d-block">Contact information</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                @auth
                    <div class="nav-header p-3 bg-light mt-2">
                        <small class="text-uppercase text-muted">Account</small>
                    </div>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                        <div class="nav-icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-person text-primary"></i>
                        </div>
                        <div>
                            <span class="fw-medium">Profile</span>
                        </div>
                        <i class="bi bi-chevron-right ms-auto text-muted"></i>
                    </a>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                        <div class="nav-icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-gear text-primary"></i>
                        </div>
                        <div>
                            <span class="fw-medium">Settings</span>
                        </div>
                        <i class="bi bi-chevron-right ms-auto text-muted"></i>
                    </a>
                @else
                    <div class="nav-header p-3 bg-light mt-2">
                        <small class="text-uppercase text-muted">Authentication</small>
                    </div>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="{{ route('login') }}">
                        <div class="nav-icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-box-arrow-in-right text-primary"></i>
                        </div>
                        <div>
                            <span class="fw-medium">Login</span>
                        </div>
                        <i class="bi bi-chevron-right ms-auto text-muted"></i>
                    </a>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="{{ route('register') }}">
                        <div class="nav-icon-wrapper bg-success bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-person-plus text-success"></i>
                        </div>
                        <div>
                            <span class="fw-medium">Register</span>
                        </div>
                        <i class="bi bi-chevron-right ms-auto text-muted"></i>
                    </a>
                @endauth
            </nav>
            
            <!-- Mobile Auth Actions -->
            @auth
                <div class="p-3 border-top">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</header>