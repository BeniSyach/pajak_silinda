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
    </ul>
</nav>
