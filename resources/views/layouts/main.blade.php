<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SMA Negeri 1 Contoh')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Additional CSS -->
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section footer-about">
                    <h3>SMA Negeri 1 Contoh</h3>
                    <p>Sekolah berbasis islami unggul prestasi. Sholeh Dalam Perilaku, Unggul Dalam Mutu dan Berdaya Saing Global.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/@SMAM1TATV" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-section footer-links">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                        <li><a href="{{ url('/ppdb') }}">PPDB</a></li>
                        <li><a href="{{ url('/berita') }}">Berita</a></li>
                        <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="footer-section footer-services">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="{{ url('/ppdb') }}">PPDB</a></li>
                        <li><a href="{{ url('/rapor') }}">Rapor</a></li>
                        <li><a href="{{ url('/skl') }}">SKL</a></li>
                        <li><a href="{{ url('/unduh') }}">Unduh</a></li>
                        <li><a href="{{ url('/pusat-bantuan') }}">Pusat Bantuan</a></li>
                    </ul>
                </div>
                
                <div class="footer-section footer-contact">
                    <h4>Kontak</h4>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+62 813-1945-7080</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>ppdb@smam1ta.sch.id</span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jl. Raya Ketegan No.35 Taman - Sidoarjo</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SMA Negeri 1 Contoh. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
