@extends('layouts.main')

@section('title', 'Program - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Program Sekolah</h1>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Program</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- Programs Section -->
<section class="programs-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Program Unggulan</h2>
            <p class="section-subtitle">Program-program yang dirancang untuk mengembangkan potensi siswa secara optimal</p>
        </div>

        <div class="programs-grid">
            <!-- Academic Programs -->
            <div class="program-category">
                <h3 class="category-title">Program Akademik</h3>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="program-content">
                        <h4>Kelas Unggulan</h4>
                        <p>Program kelas khusus dengan kurikulum yang diperkaya untuk siswa berprestasi akademik tinggi.</p>
                        <ul class="program-features">
                            <li>Pembelajaran intensif</li>
                            <li>Bimbingan olimpiade</li>
                            <li>Persiapan PTN favorit</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="program-content">
                        <h4>Program IT & Coding</h4>
                        <p>Pembelajaran pemrograman dan teknologi informasi untuk mempersiapkan siswa di era digital.</p>
                        <ul class="program-features">
                            <li>Web Development</li>
                            <li>Mobile App Development</li>
                            <li>Data Science Basic</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="program-content">
                        <h4>Bilingual Program</h4>
                        <p>Program pembelajaran dwi bahasa (Indonesia-Inggris) untuk meningkatkan kemampuan komunikasi global.</p>
                        <ul class="program-features">
                            <li>English Conversation Club</li>
                            <li>TOEFL Preparation</li>
                            <li>Cambridge Certification</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Character Building Programs -->
            <div class="program-category">
                <h3 class="category-title">Program Pembentukan Karakter</h3>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <div class="program-content">
                        <h4>ISMUBA (Al-Islam, Kemuhammadiyahan, Bahasa Arab)</h4>
                        <p>Program penguatan nilai-nilai keislaman dan kemuhammadiyahan dalam kehidupan sehari-hari.</p>
                        <ul class="program-features">
                            <li>Tahfidz Al-Qur'an</li>
                            <li>Kajian Islam</li>
                            <li>Praktik Ibadah</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="program-content">
                        <h4>Leadership Training</h4>
                        <p>Program pengembangan kepemimpinan dan soft skills untuk mempersiapkan pemimpin masa depan.</p>
                        <ul class="program-features">
                            <li>OSIS & MPK Training</li>
                            <li>Public Speaking</li>
                            <li>Team Building</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="program-content">
                        <h4>Community Service</h4>
                        <p>Program pengabdian masyarakat untuk menumbuhkan kepedulian sosial siswa.</p>
                        <ul class="program-features">
                            <li>Bakti Sosial</li>
                            <li>Peduli Lingkungan</li>
                            <li>Volunteer Program</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Extracurricular Programs -->
            <div class="program-category">
                <h3 class="category-title">Program Ekstrakurikuler</h3>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="program-content">
                        <h4>Olahraga Prestasi</h4>
                        <p>Berbagai cabang olahraga untuk mengembangkan bakat dan prestasi siswa di bidang olahraga.</p>
                        <ul class="program-features">
                            <li>Basket, Futsal, Voli</li>
                            <li>Bulu Tangkis, Tenis Meja</li>
                            <li>Pencak Silat, Taekwondo</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="program-content">
                        <h4>Seni & Budaya</h4>
                        <p>Program pengembangan bakat seni dan pelestarian budaya Indonesia.</p>
                        <ul class="program-features">
                            <li>Musik & Paduan Suara</li>
                            <li>Tari Tradisional</li>
                            <li>Teater & Drama</li>
                        </ul>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="program-content">
                        <h4>Klub Sains & Penelitian</h4>
                        <p>Program pengembangan kemampuan riset dan inovasi di bidang sains.</p>
                        <ul class="program-features">
                            <li>Olimpiade Sains</li>
                            <li>Karya Ilmiah Remaja</li>
                            <li>Robotika & IoT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Schedule CTA -->
<section class="program-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ingin Tahu Lebih Lanjut?</h2>
            <p>Hubungi kami untuk informasi lengkap mengenai program-program sekolah</p>
            <a href="{{ url('/kontak') }}" class="btn btn-light">Hubungi Kami</a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.programs-section {
    padding: 3rem 0;
}

.programs-grid {
    display: flex;
    flex-direction: column;
    gap: 3rem;
}

.program-category {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 12px;
}

.category-title {
    color: #003b73;
    font-size: 1.75rem;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 3px solid #FFD700;
}

.program-card {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: flex;
    gap: 1.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.program-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.program-icon {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #003b73, #0074D9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
}

.program-content h4 {
    color: #003b73;
    margin-bottom: 0.75rem;
    font-size: 1.25rem;
}

.program-content p {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.program-features {
    list-style: none;
    padding: 0;
}

.program-features li {
    padding: 0.25rem 0 0.25rem 1.5rem;
    position: relative;
    color: #666;
}

.program-features li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #FFD700;
    font-weight: bold;
}

.program-cta {
    padding: 3rem 0;
    background: linear-gradient(135deg, #003b73 0%, #0074D9 100%);
    color: white;
    text-align: center;
}

.program-cta h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.program-cta p {
    font-size: 1.125rem;
    margin-bottom: 1.5rem;
}

@media (max-width: 768px) {
    .program-card {
        flex-direction: column;
    }
    
    .program-icon {
        margin: 0 auto;
    }
}
</style>
@endpush
