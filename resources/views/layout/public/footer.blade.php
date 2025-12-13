<footer class="bg-dark text-white mt-5">
    <div class="container py-5">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">
                    <i class="bi bi-building"></i> {{ config('app.name') }}
                </h5>
                <p class="text-light">
                    Aplikasi berbasis Laravel dengan Bootstrap 5. 
                    Dibangun dengan teknologi terbaru untuk performa optimal.
                </p>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Contact</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Terms of Service</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Contact Us</h5>
                <ul class="list-unstyled text-light">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Jl. Contoh No. 123, Jakarta</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i>(021) 1234-5678</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i>info@example.com</li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Newsletter</h5>
                <p class="text-light">Subscribe untuk update terbaru</p>
                <form action="#" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email Anda" required>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <hr class="bg-light">
        
        <!-- Copyright -->
        <div class="row pt-3">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Made with <i class="bi bi-heart-fill text-danger"></i> using Laravel & Bootstrap</p>
            </div>
        </div>
    </div>
</footer>