@extends('layouts.main')

@section('title', 'Tentang Kami - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Tentang Kami</h1>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Tentang Kami</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- About Content -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2 class="section-title">Profil Sekolah</h2>
                <p>
                    SMA Negeri 1 Contoh adalah sekolah berbasis islami unggul prestasi yang terletak di Provinsi Jawa Timur, 
                    Kabupaten Sidoarjo, Kecamatan Taman. Berbekal Keahlian Kompetensi dengan menerapkan berbudaya Islam.
                </p>
                <p>
                    Memiliki Motto "The Excellent School" sebagai bagian dari Visi kami. Kami memiliki Visi Misi: 
                    Sholeh Dalam Perilaku, Unggul Dalam Mutu dan Berdaya Saing Global.
                </p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/school-building.jpg') }}" alt="Gedung Sekolah">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="vision-mission-section">
    <div class="container">
        <div class="vm-grid">
            <div class="vm-card">
                <h3>Visi</h3>
                <p>
                    Menjadi sekolah islami yang unggul dalam prestasi, berakhlak mulia, dan berdaya saing global 
                    pada tahun 2030.
                </p>
            </div>
            <div class="vm-card">
                <h3>Misi</h3>
                <ul>
                    <li>Menyelenggarakan pendidikan yang berkualitas berbasis nilai-nilai Islam</li>
                    <li>Mengembangkan potensi akademik dan non-akademik siswa</li>
                    <li>Membentuk karakter siswa yang berakhlak mulia</li>
                    <li>Mempersiapkan siswa untuk bersaing di tingkat global</li>
                    <li>Menciptakan lingkungan belajar yang kondusif dan inovatif</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- History Timeline -->
<section class="history-section">
    <div class="container">
        <h2 class="section-title text-center">Sejarah Singkat</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-year">1990</div>
                <div class="timeline-content">
                    <h4>Pendirian Sekolah</h4>
                    <p>SMA Negeri 1 Contoh didirikan dengan semangat memberikan pendidikan berkualitas.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">2000</div>
                <div class="timeline-content">
                    <h4>Akreditasi A</h4>
                    <p>Memperoleh akreditasi A dari Badan Akreditasi Nasional Sekolah/Madrasah.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">2015</div>
                <div class="timeline-content">
                    <h4>Sekolah Adiwiyata</h4>
                    <p>Meraih penghargaan sebagai Sekolah Adiwiyata tingkat nasional.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">2025</div>
                <div class="timeline-content">
                    <h4>Era Digital</h4>
                    <p>Transformasi digital dengan sistem pembelajaran berbasis teknologi modern.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.page-header {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3rem;
}

.page-title {
    font-size: 3rem;
    color: white;
    margin-bottom: 1rem;
}

.breadcrumb {
    color: white;
    font-size: 1rem;
}

.breadcrumb a {
    color: #FFD700;
}

.about-section {
    padding: 3rem 0;
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.about-image img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.vision-mission-section {
    padding: 3rem 0;
    background-color: #f8f9fa;
}

.vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

.vm-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.vm-card h3 {
    color: #003b73;
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.vm-card ul {
    list-style: none;
    padding-left: 0;
}

.vm-card li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
}

.vm-card li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #FFD700;
    font-weight: bold;
}

.history-section {
    padding: 3rem 0;
}

.timeline {
    max-width: 800px;
    margin: 2rem auto;
    position: relative;
}

.timeline:before {
    content: '';
    position: absolute;
    left: 100px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #003b73;
}

.timeline-item {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
    position: relative;
}

.timeline-year {
    min-width: 80px;
    font-size: 1.5rem;
    font-weight: bold;
    color: #003b73;
}

.timeline-content {
    flex: 1;
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.timeline-content h4 {
    color: #003b73;
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .about-grid, .vm-grid {
        grid-template-columns: 1fr;
    }
    
    .page-title {
        font-size: 2rem;
    }
    
    .timeline:before {
        left: 60px;
    }
}
</style>
@endpush
