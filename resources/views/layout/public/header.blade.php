<header>
    <!-- Top Bar (Optional) -->
    <div class="bg-dark text-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small><i class="bi bi-envelope me-1"></i> info@example.com | <i class="bi bi-phone me-1 ms-3"></i> (021) 1234-5678</small>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-inline-flex align-items-center">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="#">
                <div class="logo-icon bg-primary rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                    <i class="bi bi-rocket-takeoff text-white fs-5"></i>
                </div>
                <span class="brand-text">{{ config('app.name', 'MyApp') }}</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="d-none d-lg-flex align-items-center">
                <ul class="navbar-nav me-4">
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#" 
                           data-bs-toggle="tooltip" title="Home Page">
                            <i class="bi bi-house me-1"></i> Home
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#" 
                           data-bs-toggle="tooltip" title="About Us">
                            <i class="bi bi-info-circle me-1"></i> About
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#" 
                           data-bs-toggle="tooltip" title="Contact Us">
                            <i class="bi bi-envelope me-1"></i> Contact
                            <span class="nav-indicator"></span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link position-relative px-3 py-2 rounded" href="#" 
                           data-bs-toggle="tooltip" title="Our Services">
                            <i class="bi bi-briefcase me-1"></i> Services
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
                <span class="badge bg-primary rounded-pill ms-1" id="mobile-menu-badge">3</span>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Side Navigation (Offcanvas) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileSideNav" 
         aria-labelledby="mobileSideNavLabel">
        <div class="offcanvas-header border-bottom">
            <div class="d-flex align-items-center">
                <div class="logo-icon bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" 
                     style="width: 40px; height: 40px;">
                    <i class="bi bi-rocket-takeoff text-white fs-5"></i>
                </div>
                <div>
                    <h5 class="offcanvas-title fw-bold mb-0" id="mobileSideNavLabel">
                        {{ config('app.name', 'MyApp') }}
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
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                    <div class="nav-icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-house text-primary"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Home</span>
                        <small class="text-muted d-block">Back to homepage</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                    <div class="nav-icon-wrapper bg-info bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-info-circle text-info"></i>
                    </div>
                    <div>
                        <span class="fw-medium">About Us</span>
                        <small class="text-muted d-block">Learn more about us</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                    <div class="nav-icon-wrapper bg-success bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-envelope text-success"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Contact</span>
                        <small class="text-muted d-block">Get in touch with us</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                    <div class="nav-icon-wrapper bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                        <i class="bi bi-briefcase text-warning"></i>
                    </div>
                    <div>
                        <span class="fw-medium">Services</span>
                        <small class="text-muted d-block">What we offer</small>
                    </div>
                    <i class="bi bi-chevron-right ms-auto text-muted"></i>
                </a>
                
                @auth
                    <div class="nav-header p-3 bg-light mt-2">
                        <small class="text-uppercase text-muted">Account</small>
                    </div>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                        <div class="nav-icon-wrapper bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-person text-secondary"></i>
                        </div>
                        <div>
                            <span class="fw-medium">Profile</span>
                        </div>
                        <i class="bi bi-chevron-right ms-auto text-muted"></i>
                    </a>
                    
                    <a class="nav-link d-flex align-items-center py-3 px-4 border-bottom" href="#">
                        <div class="nav-icon-wrapper bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="bi bi-gear text-secondary"></i>
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
            
            <!-- Theme Toggle (Optional) -->
            <div class="p-3 border-top">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-muted">Dark Mode</span>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="darkModeToggle">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    /* Modern Header Styles */
    .nav-link {
        transition: all 0.3s ease;
        color: #495057 !important;
    }
    
    .nav-link:hover {
        background-color: rgba(13, 110, 253, 0.1);
        color: #0d6efd !important;
        transform: translateX(5px);
    }
    
    .nav-link.active {
        background-color: rgba(13, 110, 253, 0.15);
        color: #0d6efd !important;
        border-left: 3px solid #0d6efd;
    }
    
    .nav-indicator {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #0d6efd, #6ea8fe);
        transition: width 0.3s ease;
    }
    
    .nav-link:hover .nav-indicator {
        width: 70%;
    }
    
    .logo-icon {
        transition: transform 0.3s ease;
    }
    
    .navbar-brand:hover .logo-icon {
        transform: rotate(15deg);
    }
    
    .avatar {
        font-weight: 600;
        transition: transform 0.3s ease;
    }
    
    .dropdown-toggle:hover .avatar {
        transform: scale(1.1);
    }
    
    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-radius: 10px;
    }
    
    .dropdown-item {
        border-radius: 5px;
        margin: 2px 8px;
        width: auto;
    }
    
    .dropdown-item:hover {
        background-color: rgba(13, 110, 253, 0.1);
    }
    
    /* Offcanvas Custom Styles */
    .offcanvas {
        border-left: 1px solid #dee2e6;
    }
    
    .offcanvas-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .nav-icon-wrapper {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Mobile Menu Badge */
    #mobile-menu-badge {
        font-size: 0.6rem;
        padding: 0.25em 0.5em;
    }
    
    /* Tooltip Styles */
    .tooltip-inner {
        border-radius: 8px;
        padding: 6px 12px;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .navbar {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        
        .navbar-toggler {
            padding: 0.25rem 0.5rem;
            font-size: 1rem;
        }
    }
    
    /* Smooth transitions */
    * {
        scroll-behavior: smooth;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'hover'
        });
    });
    
    // Dark mode toggle
    const darkModeToggle = document.getElementById('darkModeToggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('change', function() {
            document.body.classList.toggle('dark-mode', this.checked);
            localStorage.setItem('darkMode', this.checked);
        });
        
        // Check for saved theme preference
        if (localStorage.getItem('darkMode') === 'true') {
            darkModeToggle.checked = true;
            document.body.classList.add('dark-mode');
        }
    }
    
    // Active nav link indicator
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
    
    // Mobile menu badge update
    const mobileMenuBadge = document.getElementById('mobile-menu-badge');
    if (mobileMenuBadge) {
        // Update badge count (example: unread notifications)
        const unreadCount = 3; // This would come from your backend
        mobileMenuBadge.textContent = unreadCount;
        if (unreadCount === 0) {
            mobileMenuBadge.style.display = 'none';
        }
    }
    
    // Smooth hover effects for desktop nav
    const desktopNavLinks = document.querySelectorAll('.navbar-nav .nav-link');
    desktopNavLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Add ripple effect to buttons
    document.querySelectorAll('.btn, .nav-link').forEach(button => {
        button.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});

// Add CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple {
        position: absolute;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .btn, .nav-link {
        position: relative;
        overflow: hidden;
    }
    
    /* Dark mode styles */
    body.dark-mode {
        background-color: #1a1a1a;
        color: #ffffff;
    }
    
    body.dark-mode .navbar {
        background-color: #2d2d2d !important;
    }
    
    body.dark-mode .offcanvas {
        background-color: #2d2d2d;
    }
`;
document.head.appendChild(style);
</script>