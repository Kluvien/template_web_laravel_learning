@extends('layouts.main')

@section('title', 'Kontak - SMA Negeri 1 Contoh')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <h1 class="page-title">Hubungi Kami</h1>
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Kontak</span>
            </nav>
        </div>
    </div>
    <div class="hero-background" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                <p class="contact-intro">Jangan ragu untuk menghubungi kami. Kami siap membantu Anda!</p>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Ketegan No.35<br>Taman - Sidoarjo<br>Jawa Timur 61257</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Telepon</h4>
                        <p>+62 813-1945-7080<br>+62 31-7881234</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p>info@sman1contoh.sch.id<br>ppdb@sman1contoh.sch.id</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Jumat: 07:00 - 16:00<br>Sabtu: 07:00 - 13:00<br>Minggu: Libur</p>
                    </div>
                </div>

                <div class="social-links">
                    <h4>Ikuti Kami</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <h2>Kirim Pesan</h2>
                <p class="form-intro">Silakan isi formulir di bawah ini untuk menghubungi kami</p>

                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    Terdapat kesalahan dalam pengisian form.
                </div>
                @endif

                <form action="{{ url('/kontak') }}" method="POST" class="contact-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="required">*</span></label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="form-control @error('name') error @enderror" 
                                   value="{{ old('name') }}" 
                                   required>
                            @error('name')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   class="form-control @error('email') error @enderror" 
                                   value="{{ old('email') }}" 
                                   required>
                            @error('email')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   class="form-control @error('phone') error @enderror" 
                                   value="{{ old('phone') }}">
                            @error('phone')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek <span class="required">*</span></label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   class="form-control @error('subject') error @enderror" 
                                   value="{{ old('subject') }}" 
                                   required>
                            @error('subject')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan <span class="required">*</span></label>
                        <textarea id="message" 
                                  name="message" 
                                  class="form-control @error('message') error @enderror" 
                                  rows="6" 
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                        <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <h2 class="section-title text-center">Lokasi Kami</h2>
        <div class="map-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0!2d112.7!3d-7.3!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMTgnMDAuMCJTIDExMsKwNDInMDAuMCJF!5e0!3m2!1sid!2sid!4v1234567890" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.contact-section {
    padding: 3rem 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 3rem;
}

.contact-info h2,
.contact-form-wrapper h2 {
    color: #003b73;
    margin-bottom: 1rem;
}

.contact-intro,
.form-intro {
    color: #666;
    margin-bottom: 2rem;
}

.contact-item {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.contact-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #003b73, #0074D9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.contact-details h4 {
    color: #003b73;
    margin-bottom: 0.5rem;
}

.contact-details p {
    color: #666;
    line-height: 1.6;
}

.social-links {
    margin-top: 2rem;
}

.social-links h4 {
    color: #003b73;
    margin-bottom: 1rem;
}

.social-icons {
    display: flex;
    gap: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    background: #003b73;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: #FFD700;
    color: #003b73;
    transform: translateY(-3px);
}

.contact-form-wrapper {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 12px;
}

.contact-form {
    margin-top: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #333;
    font-weight: 600;
}

.required {
    color: #dc3545;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #003b73;
}

.form-control.error {
    border-color: #dc3545;
}

.error-message {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    display: block;
}

.alert {
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.map-section {
    padding: 3rem 0;
    background: #f8f9fa;
}

.map-wrapper {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-top: 2rem;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi.');
            }
        });
    }
});
</script>
@endpush
