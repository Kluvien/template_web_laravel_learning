@extends('layouts.main')

@section('title', 'Berita - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Berita & Pengumuman</h1>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Berita</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- News Section -->
<section class="news-list-section">
    <div class="container">
        <div class="news-filter">
            <h3>Kategori</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">Semua</button>
                <button class="filter-btn" data-category="prestasi">Prestasi</button>
                <button class="filter-btn" data-category="kegiatan">Kegiatan</button>
                <button class="filter-btn" data-category="pengumuman">Pengumuman</button>
                <button class="filter-btn" data-category="akademik">Akademik</button>
            </div>
        </div>

        <div class="news-grid">
            @php
                // Fetch news from database - CMS will manage this
                $newsList = [
                    [
                        'id' => 1,
                        'title' => 'Siswa SMAMITA Raih Juara 1 Olimpiade Sains Nasional',
                        'slug' => 'siswa-smamita-raih-juara-1-osn',
                        'category' => 'Prestasi',
                        'date' => '15 November 2025',
                        'author' => 'Admin',
                        'image' => 'news-1.jpg',
                        'excerpt' => 'Prestasi membanggakan kembali diraih oleh siswa SMA Negeri 1 Contoh dalam ajang Olimpiade Sains Nasional. Tim siswa berhasil meraih medali emas di bidang Matematika...',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Pelaksanaan Pekan Kreativitas dan Seni 2025',
                        'slug' => 'pekan-kreativitas-dan-seni',
                        'category' => 'Kegiatan',
                        'date' => '10 November 2025',
                        'author' => 'Admin',
                        'image' => 'news-2.jpg',
                        'excerpt' => 'SMA Negeri 1 Contoh menggelar Pekan Kreativitas dan Seni yang menampilkan berbagai karya siswa mulai dari seni rupa, musik, tari, hingga karya ilmiah...',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Pembukaan Pendaftaran PPDB Tahun Ajaran 2026/2027',
                        'slug' => 'pembukaan-ppdb-2026',
                        'category' => 'Pengumuman',
                        'date' => '5 November 2025',
                        'author' => 'Admin',
                        'image' => 'news-3.jpg',
                        'excerpt' => 'SMA Negeri 1 Contoh membuka pendaftaran peserta didik baru untuk tahun ajaran 2026/2027. Pendaftaran dapat dilakukan secara online melalui website resmi...',
                    ],
                    [
                        'id' => 4,
                        'title' => 'Workshop Pembelajaran Digital untuk Guru',
                        'slug' => 'workshop-pembelajaran-digital',
                        'category' => 'Akademik',
                        'date' => '1 November 2025',
                        'author' => 'Admin',
                        'image' => 'news-1.jpg',
                        'excerpt' => 'Sekolah mengadakan workshop pembelajaran digital untuk meningkatkan kompetensi guru dalam menggunakan teknologi pembelajaran modern...',
                    ],
                    [
                        'id' => 5,
                        'title' => 'Siswa Wakili Indonesia di Kompetisi Internasional',
                        'slug' => 'kompetisi-internasional',
                        'category' => 'Prestasi',
                        'date' => '28 Oktober 2025',
                        'author' => 'Admin',
                        'image' => 'news-2.jpg',
                        'excerpt' => 'Dua siswa terpilih mewakili Indonesia dalam kompetisi robotika tingkat internasional yang akan diselenggarakan di Singapura...',
                    ],
                    [
                        'id' => 6,
                        'title' => 'Bakti Sosial Peduli Bencana Alam',
                        'slug' => 'bakti-sosial-bencana',
                        'category' => 'Kegiatan',
                        'date' => '20 Oktober 2025',
                        'author' => 'Admin',
                        'image' => 'news-3.jpg',
                        'excerpt' => 'Komunitas siswa mengadakan penggalangan dana dan bakti sosial untuk membantu korban bencana alam di daerah terdampak...',
                    ],
                ];
            @endphp

            @foreach($newsList as $news)
            <article class="news-list-card" data-category="{{ strtolower($news['category']) }}">
                <div class="news-image">
                    <img src="{{ asset('images/' . $news['image']) }}" alt="{{ $news['title'] }}">
                    <span class="news-category">{{ $news['category'] }}</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar"></i> {{ $news['date'] }}</span>
                        <span class="news-author"><i class="far fa-user"></i> {{ $news['author'] }}</span>
                    </div>
                    <h3 class="news-title">{{ $news['title'] }}</h3>
                    <p class="news-excerpt">{{ $news['excerpt'] }}</p>
                    <a href="{{ url('/berita/' . $news['slug']) }}" class="news-link">Baca Selengkapnya →</a>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button class="page-btn" disabled>« Prev</button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">Next »</button>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.news-list-section {
    padding: 3rem 0;
}

.news-filter {
    margin-bottom: 2rem;
}

.news-filter h3 {
    color: #003b73;
    margin-bottom: 1rem;
}

.filter-buttons {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 0.5rem 1.5rem;
    border: 2px solid #003b73;
    background: white;
    color: #003b73;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: #003b73;
    color: white;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.news-list-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-list-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 2rem;
}

.page-btn {
    padding: 0.5rem 1rem;
    border: 1px solid #ddd;
    background: white;
    color: #003b73;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.page-btn:hover:not(:disabled) {
    background: #003b73;
    color: white;
    border-color: #003b73;
}

.page-btn.active {
    background: #003b73;
    color: white;
    border-color: #003b73;
}

.page-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const newsCards = document.querySelectorAll('.news-list-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const category = this.dataset.category;
            
            // Filter news cards
            newsCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush
