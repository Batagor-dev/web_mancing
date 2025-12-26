@extends('layout.errors.main')

@section('title', 'Halaman Tidak Ditemukan')

@section('styles')
<style>
    /* Custom styles khusus untuk halaman 404 */
    .error-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 1rem;
    }
    
    .error-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: none;
        overflow: hidden;
        max-width: 800px;
        width: 100%;
        position: relative;
    }
    
    .error-header {
        background: linear-gradient(90deg, #4361ee 0%, #3a0ca3 100%);
        padding: 2.5rem 2rem;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .error-header::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
        opacity: 0.3;
        animation: float 20s linear infinite;
    }
    
    .error-code {
        font-size: 8rem;
        font-weight: 900;
        line-height: 1;
        margin-bottom: 0.5rem;
        text-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .error-title {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    
    .error-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        font-weight: 300;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .error-body {
        padding: 3rem 2.5rem;
    }
    
    .error-icon {
        font-size: 6rem;
        color: #4361ee;
        margin-bottom: 1.5rem;
        animation: bounce 2s infinite;
    }
    
    .error-message {
        font-size: 1.25rem;
        color: #495057;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    
    .error-details {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2.5rem;
        border-left: 4px solid #4361ee;
    }
    
    .error-details h5 {
        color: #3a0ca3;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .error-details ul {
        margin-bottom: 0;
        padding-left: 1.2rem;
    }
    
    .error-details li {
        margin-bottom: 0.5rem;
        color: #6c757d;
    }
    
    .error-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
    }
    
    .btn-error {
        padding: 0.8rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .btn-error-primary {
        background: linear-gradient(90deg, #4361ee 0%, #3a0ca3 100%);
        color: white;
        border: none;
    }
    
    .btn-error-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
        color: white;
    }
    
    .btn-error-outline {
        background: transparent;
        color: #4361ee;
        border: 2px solid #4361ee;
    }
    
    .btn-error-outline:hover {
        background: rgba(67, 97, 238, 0.05);
        transform: translateY(-3px);
        color: #3a0ca3;
    }
    
    /* Animations */
    @keyframes float {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }
        100% {
            transform: translate(-10px, -10px) rotate(360deg);
        }
    }
    
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }
    
    .pulse-animation {
        animation: pulse 2s infinite;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .error-code {
            font-size: 6rem;
        }
        
        .error-title {
            font-size: 1.8rem;
        }
        
        .error-body {
            padding: 2rem 1.5rem;
        }
        
        .error-actions {
            flex-direction: column;
        }
        
        .btn-error {
            width: 100%;
        }
    }
    
    @media (max-width: 576px) {
        .error-code {
            font-size: 5rem;
        }
        
        .error-title {
            font-size: 1.5rem;
        }
        
        .error-subtitle {
            font-size: 1rem;
        }
        
        .error-header {
            padding: 2rem 1rem;
        }
    }
</style>
@endsection

@section('content')
<div class="error-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="error-card animate__animated animate__fadeIn">
                    <div class="error-header">
                        <div data-aos="zoom-in">
                            <h1 class="error-code">404</h1>
                            <h2 class="error-title">Halaman Tidak Ditemukan</h2>
                            <p class="error-subtitle">Maaf, halaman yang Anda cari tidak dapat ditemukan di server kami.</p>
                        </div>
                    </div>
                    
                    <div class="error-body">
                        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="error-icon">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            
                            <p class="error-message">
                                Halaman yang Anda coba akses mungkin telah dipindahkan, dihapus, atau mungkin tidak pernah ada.
                                Silakan periksa kembali URL yang Anda masukkan atau gunakan navigasi di bawah ini.
                            </p>
                            
                            <div class="error-details" data-aos="fade-up" data-aos-delay="300">
                                <h5>Mungkin Anda ingin:</h5>
                                <ul>
                                    <li>Memastikan URL yang dimasukkan sudah benar</li>
                                    <li>Kembali ke halaman sebelumnya</li>
                                    <li>Mengunjungi halaman beranda kami</li>
                                    <li>Mencari informasi yang Anda butuhkan melalui pencarian</li>
                                    <li>Menghubungi tim dukungan jika masalah berlanjut</li>
                                </ul>
                            </div>
                            
                            <div class="error-actions" data-aos="fade-up" data-aos-delay="400">
                                <a href="{{ url()->previous() }}" class="btn btn-error btn-error-outline">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <a href="{{ route('home') }}" class="btn btn-error btn-error-primary">
                                    <i class="bi bi-house-door"></i> Beranda
                                </a>
                                <button onclick="window.location.reload()" class="btn btn-error btn-error-outline">
                                    <i class="bi bi-arrow-clockwise"></i> Muat Ulang
                                </button>
                            </div>
                            
                            <div class="mt-5" data-aos="fade-up" data-aos-delay="500">
                                <p class="text-muted mb-2">Atau coba cari informasi yang Anda butuhkan:</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="600">
                    <p class="text-muted">
                        Jika Anda yakin ini adalah kesalahan, silakan 
                        <a href="mailto:{{ settings()['email'] ?? 'support@example.com' }}" class="text-decoration-none">
                            hubungi dukungan teknis
                        </a> 
                        dan beri tahu kami tentang masalah ini.
                    </p>
                    <p class="text-muted small pulse-animation">
                        Kode Error: 404 | Status: Not Found | Timestamp: {{ now()->format('Y-m-d H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Animasi tambahan dengan GSAP
    document.addEventListener('DOMContentLoaded', function() {
        // Animasi untuk angka 404
        gsap.from('.error-code', {
            duration: 1.5,
            y: -50,
            opacity: 0,
            ease: "bounce.out"
        });
        
        // Animasi untuk tombol
        gsap.from('.btn-error', {
            duration: 0.8,
            y: 20,
            opacity: 0,
            stagger: 0.1,
            delay: 0.5
        });
        
        // Efek hover tambahan untuk tombol
        const buttons = document.querySelectorAll('.btn-error');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                gsap.to(this, {duration: 0.2, scale: 1.05});
            });
            button.addEventListener('mouseleave', function() {
                gsap.to(this, {duration: 0.2, scale: 1});
            });
        });
        
        // Animasi latar belakang pattern
        const header = document.querySelector('.error-header');
        if(header) {
            gsap.to(header, {
                duration: 30,
                backgroundPosition: "500px 0px",
                repeat: -1,
                ease: "linear"
            });
        }
    });
    
    // Fungsi untuk kembali ke halaman sebelumnya
    function goBack() {
        if (document.referrer) {
            window.history.back();
        } else {
            window.location.href = "{{ route('home') }}";
        }
    }
</script>
@endsection