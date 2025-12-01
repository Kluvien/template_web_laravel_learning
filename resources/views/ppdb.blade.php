@extends('layouts.main')

@section('title', 'PPDB - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Penerimaan Peserta Didik Baru</h1>
            <p class="page-subtitle">Tahun Ajaran 2026/2027</p>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>PPDB</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- PPDB Info Section -->
<section class="ppdb-info-section">
    <div class="container">
        <div class="ppdb-alert">
            <i class="fas fa-bullhorn"></i>
            <div>
                <h3>Pendaftaran Dibuka!</h3>
                <p>Periode pendaftaran: 1 Januari 2026 - 31 Maret 2026</p>
            </div>
        </div>

        <!-- PPDB Timeline -->
        <div class="ppdb-timeline">
            <h2 class="section-title text-center">Jadwal PPDB</h2>
            
            <div class="timeline-grid">
                <div class="timeline-card">
                    <div class="timeline-number">1</div>
                    <div class="timeline-date">1 Jan - 31 Mar 2026</div>
                    <h4>Pendaftaran Online</h4>
                    <p>Calon siswa melakukan pendaftaran online melalui website resmi</p>
                </div>

                <div class="timeline-card">
                    <div class="timeline-number">2</div>
                    <div class="timeline-date">1-15 April 2026</div>
                    <h4>Verifikasi Berkas</h4>
                    <p>Verifikasi dokumen dan berkas persyaratan pendaftaran</p>
                </div>

                <div class="timeline-card">
                    <div class="timeline-number">3</div>
                    <div class="timeline-date">20-25 April 2026</div>
                    <h4>Tes Seleksi</h4>
                    <p>Pelaksanaan tes akademik dan wawancara</p>
                </div>

                <div class="timeline-card">
                    <div class="timeline-number">4</div>
                    <div class="timeline-date">5 Mei 2026</div>
                    <h4>Pengumuman</h4>
                    <p>Pengumuman hasil seleksi melalui website dan email</p>
                </div>

                <div class="timeline-card">
                    <div class="timeline-number">5</div>
                    <div class="timeline-date">10-20 Mei 2026</div>
                    <h4>Daftar Ulang</h4>
                    <p>Daftar ulang dan pembayaran biaya pendidikan</p>
                </div>

                <div class="timeline-card">
                    <div class="timeline-number">6</div>
                    <div class="timeline-date">15 Juli 2026</div>
                    <h4>Masa Orientasi</h4>
                    <p>MPLS (Masa Pengenalan Lingkungan Sekolah)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Requirements Section -->
<section class="requirements-section">
    <div class="container">
        <h2 class="section-title text-center">Persyaratan Pendaftaran</h2>
        
        <div class="requirements-grid">
            <div class="requirement-card">
                <div class="requirement-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h4>Persyaratan Umum</h4>
                <ul>
                    <li>Lulus SMP/MTs sederajat</li>
                    <li>Usia maksimal 21 tahun pada saat mendaftar</li>
                    <li>Sehat jasmani dan rohani</li>
                    <li>Berkelakuan baik</li>
                </ul>
            </div>

            <div class="requirement-card">
                <div class="requirement-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h4>Dokumen yang Diperlukan</h4>
                <ul>
                    <li>Fotocopy Ijazah/SKHUN yang dilegalisir (2 lembar)</li>
                    <li>Fotocopy Kartu Keluarga (2 lembar)</li>
                    <li>Fotocopy Akta Kelahiran (2 lembar)</li>
                    <li>Pas foto 3x4 (4 lembar)</li>
                    <li>Surat keterangan sehat dari dokter</li>
                    <li>Surat kelakuan baik dari sekolah asal</li>
                </ul>
            </div>

            <div class="requirement-card">
                <div class="requirement-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h4>Tahap Seleksi</h4>
                <ul>
                    <li>Tes Akademik (Matematika, IPA, Bahasa Indonesia, Bahasa Inggris)</li>
                    <li>Tes Kemampuan Dasar</li>
                    <li>Wawancara dengan siswa dan orang tua</li>
                    <li>Verifikasi dokumen</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Registration CTA -->
<section class="ppdb-cta-section">
    <div class="container">
        <div class="ppdb-cta-content">
            <h2>Siap Bergabung dengan Kami?</h2>
            <p>Daftar sekarang dan raih masa depan gemilang bersama SMA Negeri 1 Contoh</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-light btn-large">
                    <i class="fas fa-edit"></i> Daftar Online
                </a>
                <a href="{{ url('/kontak') }}" class="btn btn-outline-light btn-large">
                    <i class="fas fa-question-circle"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title text-center">Pertanyaan yang Sering Diajukan</h2>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Bagaimana cara mendaftar PPDB online?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Pendaftaran dilakukan melalui website resmi sekolah. Calon siswa harus membuat akun terlebih dahulu, kemudian mengisi formulir pendaftaran dan mengunggah dokumen yang diperlukan.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Berapa biaya pendaftaran PPDB?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Biaya pendaftaran sebesar Rp 300.000,- yang dapat dibayarkan melalui transfer bank atau payment gateway yang tersedia.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Apakah ada jalur beasiswa?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Ya, kami menyediakan beasiswa prestasi untuk siswa berprestasi akademik dan non-akademik, serta beasiswa untuk siswa kurang mampu.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Kapan pengumuman hasil seleksi?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Pengumuman hasil seleksi akan diumumkan pada tanggal 5 Mei 2026 melalui website resmi dan email yang terdaftar.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Apakah ada kuota untuk pendaftar dari luar daerah?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Ya, kami membuka kesempatan untuk calon siswa dari luar daerah dengan kuota sebesar 20% dari total daya tampung.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.page-subtitle {
    color: #FFD700;
    font-size: 1.5rem;
    margin-top: 0.5rem;
}

.ppdb-info-section {
    padding: 3rem 0;
}

.ppdb-alert {
    background: linear-gradient(135deg, #FFD700, #FFC700);
    color: #003b73;
    padding: 1.5rem 2rem;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 3rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.ppdb-alert i {
    font-size: 2.5rem;
}

.ppdb-alert h3 {
    margin-bottom: 0.25rem;
    font-size: 1.5rem;
}

.ppdb-timeline {
    margin: 3rem 0;
}

.timeline-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.timeline-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.timeline-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.timeline-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #003b73, #0074D9);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem;
}

.timeline-date {
    color: #FFD700;
    font-weight: 600;
    margin-bottom: 0.75rem;
}

.timeline-card h4 {
    color: #003b73;
    margin-bottom: 0.5rem;
}

.timeline-card p {
    color: #666;
    line-height: 1.6;
}

.requirements-section {
    padding: 3rem 0;
    background: #f8f9fa;
}

.requirements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.requirement-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.requirement-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #003b73, #0074D9);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.requirement-card h4 {
    color: #003b73;
    margin-bottom: 1rem;
}

.requirement-card ul {
    list-style: none;
    padding: 0;
}

.requirement-card li {
    padding: 0.5rem 0 0.5rem 1.5rem;
    position: relative;
    color: #666;
    line-height: 1.6;
}

.requirement-card li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #FFD700;
    font-weight: bold;
}

.ppdb-cta-section {
    padding: 3rem 0;
    background: linear-gradient(135deg, #003b73 0%, #0074D9 100%);
    color: white;
    text-align: center;
}

.ppdb-cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.ppdb-cta-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-large {
    padding: 1rem 2.5rem;
    font-size: 1.125rem;
}

.btn-outline-light {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-outline-light:hover {
    background: white;
    color: #003b73;
}

.faq-section {
    padding: 3rem 0;
}

.faq-list {
    max-width: 800px;
    margin: 2rem auto 0;
}

.faq-item {
    background: white;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    overflow: hidden;
}

.faq-question {
    padding: 1.5rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background 0.3s ease;
}

.faq-question:hover {
    background: #f8f9fa;
}

.faq-question h4 {
    color: #003b73;
    margin: 0;
    flex: 1;
}

.faq-toggle {
    font-size: 1.5rem;
    color: #003b73;
    font-weight: bold;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-item.active .faq-answer {
    max-height: 500px;
    padding: 0 1.5rem 1.5rem;
}

.faq-answer p {
    color: #666;
    line-height: 1.8;
    margin: 0;
}

@media (max-width: 768px) {
    .timeline-grid,
    .requirements-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
    
    .btn-large {
        width: 100%;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>
@endpush
