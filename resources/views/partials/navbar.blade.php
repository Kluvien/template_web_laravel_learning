<nav class="navbar">
    <div class="container">
        <div class="navbar-wrapper">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="SMA Negeri 1 Contoh" class="logo">
                    <span class="brand-text">SMA Negeri 1 Contoh</span>
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
            </button>
            
            <!-- Navigation Menu - Database Driven -->
            <div class="navbar-menu" id="navbarMenu">
                <ul class="navbar-nav">
                    @php
                        // Fetch active menu items from CMS database, ordered by sort_order
                        $menus = DB::table('menus')
                                    ->where('location', 'primary')
                                    ->where('is_active', 1)
                                    ->orderBy('sort_order', 'asc')
                                    ->get();
                    @endphp
                    
                    @forelse($menus as $menu)
                        <li class="nav-item">
                            <a href="{{ url($menu->slug) }}" 
                               class="nav-link {{ request()->is(trim($menu->slug, '/')) || ($menu->slug == '/' && request()->is('/')) ? 'active' : '' }}">
                                {{ $menu->name }}
                            </a>
                        </li>
                    @empty
                        <!-- Fallback menu if database is empty -->
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/tentang-kami') }}" class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/fasilitas') }}" class="nav-link {{ request()->is('fasilitas') ? 'active' : '' }}">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/ppdb') }}" class="nav-link {{ request()->is('ppdb') ? 'active' : '' }}">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/berita') }}" class="nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kontak') }}" class="nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</nav>
