<div
    class="top-bar-boxed border-b border-theme-36 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-10 bg-gradient-to-r from-green-600 to-yellow-500">
    <div class="flex items-center justify-between h-full py-3">
        <div class="flex items-center space-x-6">
            <img src="https://serdangbedagaikab.go.id/public/img/konfigurasi/icon/1707727384_a8b2347885b23f3bca14.png"
                alt="Logo" class="mr-6" style="height: 40px">
            <a href="#" class="cursor-pointer text-white text-lg">
                <strong>Dashboard <span class="font-medium">Silindak</span></strong>
            </a>
        </div>
        <div class="ml-auto text-right">
            <div id="date-time" class="text-white text-sm font-medium mb-1"></div>

            @auth
                <div class="text-white text-sm">
                    Selamat datang, <span class="font-semibold">{{ Auth::user()->name }}</span>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="inline-block ml-2">
                    @csrf
                    <button type="submit"
                        class="text-sm bg-white text-green-700 font-semibold py-1 px-3 rounded hover:bg-green-100 transition">
                        Logout
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}"
                    class="ml-2 text-sm bg-white text-green-700 font-semibold py-1 px-3 rounded hover:bg-green-100 transition">
                    Login
                </a>
            @endguest
        </div>
    </div>
</div>
