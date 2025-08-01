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
        @endauth
    </ul>
</nav>
