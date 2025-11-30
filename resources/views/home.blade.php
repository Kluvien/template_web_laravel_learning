@extends('layouts.main')

@section('title', 'Home - SMA Muhammadiyah 1 Taman')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Dari SMAMITA untuk BANGSA</h1>
            <p class="hero-subtitle">Bersama SMA Muhammadiyah 1 Taman, Membangun Karakter untuk Indonesia</p>
            <p class="hero-description">
                SMA Muhammadiyah 1 Taman adalah sekolah berbasis islami unggul prestasi. 
                Terletak di Provinsi Jawa Timur, Kabupaten Sidoarjo, Kecamatan Taman. 
                Berbekal Keahlian Kompetensi dengan menerapkan berbudaya Islam.
            </p>
            <div class="hero-buttons">
                <a href="{{ url('/ppdb') }}" class="btn btn-primary">Daftar Sekarang</a>
                <a href="{{ url('/tentang-kami') }}" class="btn btn-secondary">Tentang Kami</a>
            </div>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- Core Values Section -->
<section class="core-values-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">CORE VALUE</h2>
            <p class="section-subtitle">Nilai-nilai inti yang menjadi landasan pendidikan kami</p>
        </div>
        
        <div class="core-values-grid">
            <div class="core-value-card">
                <div class="core-value-icon">
                    <i class="fas fa-book-quran"></i>
                </div>
                <h3 class="core-value-title">Religius</h3>
                <p class="core-value-description">Membangun karakter islami yang kuat dengan pemahaman agama yang mendalam</p>
            </div>
            
            <div class="core-value-card">
                <div class="core-value-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="core-value-title">Unggul</h3>
                <p class="core-value-description">Mencapai prestasi akademik dan non-akademik di tingkat nasional dan internasional</p>
            </div>
            
            <div class="core-value-card">
                <div class="core-value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="core-value-title">Berkarakter</h3>
                <p class="core-value-description">Membentuk kepribadian yang berakhlak mulia dan bertanggung jawab</p>
            </div>
            
            <div class="core-value-card">
                <div class="core-value-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="core-value-title">Berdaya Saing Global</h3>
                <p class="core-value-description">Mempersiapkan generasi yang siap bersaing di era global</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">GALLERY</h2>
            <p class="section-subtitle">Dokumentasi kegiatan dan fasilitas sekolah</p>
        </div>
        
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-1.jpg') }}" alt="Gallery 1">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Kegiatan Belajar Mengajar</span>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-2.jpg') }}" alt="Gallery 2">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Kegiatan Ekstrakurikuler</span>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-3.jpg') }}" alt="Gallery 3">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Fasilitas Sekolah</span>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-4.jpg') }}" alt="Gallery 4">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Kegiatan Keagamaan</span>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-5.jpg') }}" alt="Gallery 5">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Prestasi Siswa</span>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="{{ asset('images/gallery-6.jpg') }}" alt="Gallery 6">
                <div class="gallery-overlay">
                    <span class="gallery-caption">Kegiatan Olahraga</span>
                </div>
            </div>
        </div>
        
        <div class="gallery-footer">
            <a href="{{ url('/galeri') }}" class="btn btn-outline">Lihat Semua Gallery</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">TESTIMONI</h2>
            <p class="section-subtitle">Apa kata mereka tentang SMAMITA</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Testimonial 1">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        "SMA Muhammadiyah 1 Taman memberikan pendidikan yang sangat berkualitas. 
                        Saya merasa bangga bisa menjadi bagian dari keluarga besar SMAMITA."
                    </p>
                    <h4 class="testimonial-name">Ahmad Fauzi</h4>
                    <span class="testimonial-role">Alumni 2023</span>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Testimonial 2">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        "Guru-guru di SMAMITA sangat peduli dan profesional. 
                        Mereka tidak hanya mengajar, tetapi juga membimbing kami menjadi lebih baik."
                    </p>
                    <h4 class="testimonial-name">Siti Nurhaliza</h4>
                    <span class="testimonial-role">Siswa Kelas XII</span>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Testimonial 3">
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        "Anak saya berkembang dengan sangat baik di SMAMITA. 
                        Sekolah ini benar-benar memperhatikan perkembangan akademik dan karakter siswa."
                    </p>
                    <h4 class="testimonial-name">Bapak Susanto</h4>
                    <span class="testimonial-role">Orang Tua Siswa</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">BERITA TERBARU</h2>
            <p class="section-subtitle">Informasi dan kegiatan terkini dari SMAMITA</p>
        </div>
        
        <div class="news-grid">
            <article class="news-card">
                <div class="news-image">
                    <img src="{{ asset('images/news-1.jpg') }}" alt="News 1">
                    <span class="news-category">Prestasi</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar"></i> 15 November 2025</span>
                        <span class="news-author"><i class="far fa-user"></i> Admin</span>
                    </div>
                    <h3 class="news-title">Siswa SMAMITA Raih Juara 1 Olimpiade Sains Nasional</h3>
                    <p class="news-excerpt">
                        Prestasi membanggakan kembali diraih oleh siswa SMAMITA dalam ajang Olimpiade Sains Nasional...
                    </p>
                    <a href="{{ url('/berita/siswa-smamita-raih-juara-1-osn') }}" class="news-link">Baca Selengkapnya</a>
                </div>
            </article>
            
            <article class="news-card">
                <div class="news-image">
                    <img src="{{ asset('images/news-2.jpg') }}" alt="News 2">
                    <span class="news-category">Kegiatan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar"></i> 10 November 2025</span>
                        <span class="news-author"><i class="far fa-user"></i> Admin</span>
                    </div>
                    <h3 class="news-title">Pelaksanaan Pekan Kreativitas dan Seni SMAMITA 2025</h3>
                    <p class="news-excerpt">
                        SMAMITA menggelar Pekan Kreativitas dan Seni yang menampilkan berbagai karya siswa...
                    </p>
                    <a href="{{ url('/berita/pekan-kreativitas-dan-seni') }}" class="news-link">Baca Selengkapnya</a>
                </div>
            </article>
            
            <article class="news-card">
                <div class="news-image">
                    <img src="{{ asset('images/news-3.jpg') }}" alt="News 3">
                    <span class="news-category">Pengumuman</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar"></i> 5 November 2025</span>
                        <span class="news-author"><i class="far fa-user"></i> Admin</span>
                    </div>
                    <h3 class="news-title">Pembukaan Pendaftaran PPDB Tahun Ajaran 2026/2027</h3>
                    <p class="news-excerpt">
                        SMAMITA membuka pendaftaran peserta didik baru untuk tahun ajaran 2026/2027...
                    </p>
                    <a href="{{ url('/berita/pembukaan-ppdb-2026') }}" class="news-link">Baca Selengkapnya</a>
                </div>
            </article>
        </div>
        
        <div class="news-footer">
            <a href="{{ url('/berita') }}" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Bergabunglah Bersama Kami</h2>
            <p class="cta-description">
                Daftarkan putra-putri Anda di SMA Muhammadiyah 1 Taman dan raih masa depan yang gemilang
            </p>
            <a href="{{ url('/ppdb') }}" class="btn btn-light">Daftar PPDB Sekarang</a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Add any home page specific JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Gallery hover effects or lightbox can be added here
        console.log('Home page loaded');
    });
</script>
@endpush
