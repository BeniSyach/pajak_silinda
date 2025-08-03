<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')

<body class="main">

    @include('layouts.partials.topbar')
    @php
        use App\Models\Slogan;
        $slogans = Slogan::all();
    @endphp

    <div class="bg-gradient-to-r from-green-100 via-yellow-50 to-green-100 shadow rounded-xl my-10 mx-4 px-6 py-8">
        <!-- Header Tengah -->
        <div class="relative flex items-center justify-center mb-6">
            <!-- Gambar Kiri -->
            <div class="absolute left-0 flex items-center justify-center ml-4">
                <img src="{{ asset('assets/img/bupati_dan_wakil.png') }}" alt="Bupati" width="200px">
            </div>

            <!-- Teks Tengah -->
            <div class="text-center px-4">
                <h2 class="text-2xl sm:text-3xl font-bold text-white leading-snug">
                    Selamat Datang Di Aplikasi<br>
                    SILINDAK<br>
                    <span class="text-yellow-600">(SISTEM APLIKASI PAJAK KECAMATAN SILINDA)</span>
                </h2>
            </div>

            <!-- Gambar Kanan -->
            <div class="absolute right-0 flex items-center justify-center mr-2">
                <img src="{{ asset('assets/img/pak_camat.png') }}" alt="Camat" width="100px">
            </div>
        </div>

        <!-- Slogan Berjalan -->
        @if ($slogans->isNotEmpty())
            <div class="overflow-hidden px-2">
                <div
                    class="inline-block animate-marquee text-lg sm:text-xl text-white font-medium tracking-wide py-3 mt-5">
                    @foreach ($slogans as $slogan)
                        <span class="mx-10">🌟 {{ $slogan->isi }}</span>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }
    </style>

    @include('layouts.partials.topnav')


    @yield('content')


    @include('layouts.partials.footer')
    <script>
        var pallete = document.querySelector(".main").getAttribute('data-pallete').replace(/"/g, '').replace('[', '')
            .replace(']', '').split(',');
    </script>
    <script src="{{ asset('assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @include('layouts.partials.scripts')
</body>

</html>
