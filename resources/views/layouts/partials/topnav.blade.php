<nav class="top-nav">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}"
                class="top-menu {{ request()->routeIs('dashboard') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Dashboard </div>
            </a>
        </li>

        <li>
            <a href="{{ route('pbb.index') }}"
                class="top-menu {{ request()->routeIs('pbb.index') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                <div class="top-menu__title"> Data Wajib Pajak </div>
            </a>
        </li>

        {{-- Untuk Guest (belum login) --}}
        @guest
            <li>
                <a href="{{ route('wp.create') }}"
                    class="top-menu {{ request()->routeIs('wp.create') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="user-plus"></i> </div>
                    <div class="top-menu__title"> Daftarkan Wajib Pajak Baru </div>
                </a>
            </li>
        @endguest

        {{-- Untuk Admin (sudah login dan role admin) --}}
        @auth
            @if (auth()->user()->role === 'admin')
                <li>
                    <a href="{{ route('wp.index') }}"
                        class="top-menu {{ request()->routeIs('wp.*') ? 'top-menu--active' : '' }}">
                        <div class="top-menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="top-menu__title"> Rekomendasi WP Baru (Admin) </div>
                    </a>
                </li>
            @endif
        @endauth


        @auth
            <li>
                <a href="{{ route('target-kecamatan.index') }}"
                    class="top-menu {{ request()->routeIs('target-kecamatan.*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="map-pin"></i> </div>
                    <div class="top-menu__title"> Target Kecamatan </div>
                </a>
            </li>

            <li>
                <a href="{{ route('target-desa.index') }}"
                    class="top-menu {{ request()->routeIs('target-desa.*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="map"></i> </div>
                    <div class="top-menu__title"> Target Desa </div>
                </a>
            </li>

            <li>
                <a href="{{ route('slogan.index') }}"
                    class="top-menu {{ request()->routeIs('slogan.*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="top-menu__title"> Slogan </div>
                </a>
            </li>
            @if (auth()->user()->role === 'admin')
                <li>
                    <a href="{{ route('users.index') }}"
                        class="top-menu {{ request()->routeIs('users.*') ? 'top-menu--active' : '' }}">
                        <div class="top-menu__icon"> <i data-feather="users"></i> </div>
                        <div class="top-menu__title"> Manajemen Pengguna </div>
                    </a>
                </li>
            @endif
        @endauth
    </ul>
</nav>
