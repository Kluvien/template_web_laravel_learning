@extends('layouts.main')

@section('title', 'Galeri - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Galeri Foto</h1>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Galeri</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- Gallery Section -->
<section class="gallery-page-section">
    <div class="container">
        <!-- Gallery Filter -->
        <div class="gallery-filter">
            <h3>Album</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" data-album="all">Semua</button>
                <button class="filter-btn" data-album="kegiatan">Kegiatan Sekolah</button>
                <button class="filter-btn" data-album="prestasi">Prestasi</button>
                <button class="filter-btn" data-album="fasilitas">Fasilitas</button>
                <button class="filter-btn" data-album="ekstrakurikuler">Ekstrakurikuler</button>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-full-grid">
            @php
                // Sample gallery data - CMS will manage this
                $galleryItems = [
                    ['id' => 1, 'image' => 'gallery-1.jpg', 'album' => 'kegiatan', 'title' => 'Upacara Bendera'],
                    ['id' => 2, 'image' => 'gallery-2.jpg', 'album' => 'ekstrakurikuler', 'title' => 'Latihan Basket'],
                    ['id' => 3, 'image' => 'gallery-3.jpg', 'album' => 'fasilitas', 'title' => 'Perpustakaan'],
                    ['id' => 4, 'image' => 'gallery-4.jpg', 'album' => 'kegiatan', 'title' => 'Pembelajaran'],
                    ['id' => 5, 'image' => 'gallery-5.jpg', 'album' => 'prestasi', 'title' => 'Juara Olimpiade'],
                    ['id' => 6, 'image' => 'gallery-6.jpg', 'album' => 'ekstrakurikuler', 'title' => 'Paduan Suara'],
                    ['id' => 7, 'image' => 'gallery-1.jpg', 'album' => 'fasilitas', 'title' => 'Lab Komputer'],
                    ['id' => 8, 'image' => 'gallery-2.jpg', 'album' => 'kegiatan', 'title' => 'Class Meeting'],
                    ['id' => 9, 'image' => 'gallery-3.jpg', 'album' => 'prestasi', 'title' => 'Lomba Debat'],
                    ['id' => 10, 'image' => 'gallery-4.jpg', 'album' => 'ekstrakurikuler', 'title' => 'Pramuka'],
                    ['id' => 11, 'image' => 'gallery-5.jpg', 'album' => 'fasilitas', 'title' => 'Lapangan Olahraga'],
                    ['id' => 12, 'image' => 'gallery-6.jpg', 'album' => 'kegiatan', 'title' => 'Wisuda'],
                ];
            @endphp

            @foreach($galleryItems as $item)
            <div class="gallery-full-item" data-album="{{ $item['album'] }}">
                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}">
                <div class="gallery-full-overlay">
                    <span class="gallery-full-caption">{{ $item['title'] }}</span>
                    <button class="gallery-zoom-btn" data-image="{{ asset('images/' . $item['image']) }}">
                        <i class="fas fa-search-plus"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="load-more-section">
            <button class="btn btn-primary load-more-btn">Muat Lebih Banyak</button>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-content">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="Gallery Image" id="lightbox-img">
        <button class="lightbox-prev">‹</button>
        <button class="lightbox-next">›</button>
    </div>
</div>
@endsection

@push('styles')
<style>
.gallery-page-section {
    padding: 3rem 0;
}

.gallery-filter {
    margin-bottom: 2rem;
}

.gallery-filter h3 {
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

.gallery-full-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.gallery-full-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    aspect-ratio: 4 / 3;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-full-item:hover {
    transform: scale(1.02);
}

.gallery-full-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-full-item:hover img {
    transform: scale(1.1);
}

.gallery-full-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 59, 115, 0.85);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-full-item:hover .gallery-full-overlay {
    opacity: 1;
}

.gallery-full-caption {
    color: white;
    font-size: 1.125rem;
    font-weight: 600;
    text-align: center;
    padding: 0 1rem;
    margin-bottom: 1rem;
}

.gallery-zoom-btn {
    background: #FFD700;
    color: #003b73;
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.25rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.gallery-zoom-btn:hover {
    transform: scale(1.1);
    background: #FFC700;
}

.load-more-section {
    text-align: center;
    margin-top: 2rem;
}

/* Lightbox Styles */
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    align-items: center;
    justify-content: center;
}

.lightbox.active {
    display: flex;
}

.lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
}

.lightbox-content img {
    max-width: 100%;
    max-height: 90vh;
    object-fit: contain;
}

.lightbox-close {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 40px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.lightbox-close:hover {
    color: #FFD700;
}

.lightbox-prev,
.lightbox-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: none;
    font-size: 3rem;
    padding: 1rem 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lightbox-prev {
    left: -60px;
}

.lightbox-next {
    right: -60px;
}

.lightbox-prev:hover,
.lightbox-next:hover {
    background: rgba(255, 215, 0, 0.8);
    color: #003b73;
}

@media (max-width: 768px) {
    .gallery-full-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
    
    .lightbox-prev {
        left: 10px;
    }
    
    .lightbox-next {
        right: 10px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-full-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const album = this.dataset.album;
            
            galleryItems.forEach(item => {
                if (album === 'all' || item.dataset.album === album) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const zoomBtns = document.querySelectorAll('.gallery-zoom-btn');
    const closeBtn = document.querySelector('.lightbox-close');
    
    zoomBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const imgSrc = this.dataset.image;
            lightboxImg.src = imgSrc;
            lightbox.classList.add('active');
        });
    });
    
    closeBtn.addEventListener('click', function() {
        lightbox.classList.remove('active');
    });
    
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (lightbox.classList.contains('active')) {
            if (e.key === 'Escape') {
                lightbox.classList.remove('active');
            }
        }
    });
});
</script>
@endpush
