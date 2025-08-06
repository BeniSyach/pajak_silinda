<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')

<body class="main">

    @include('layouts.partials.topbar')
    @php
        use App\Models\Slogan;
        $slogans = Slogan::all();
    @endphp

    <div class="bg-gradient-to-r from-green-100 via-yellow-50 to-green-100  rounded-xl">
        <!-- Header Tengah -->
        {{-- <div class="silindak-header">
            <div class="silindak-header-container">
                <!-- Gambar Kiri -->
                <div class="silindak-image-left">
                    <img src="{{ asset('assets/img/bupati_dan_wakil.png') }}" alt="Bupati dan Wakil">
                </div>

                <!-- Teks Tengah -->
                <div class="silindak-text-center">
                    <h2>
                        Selamat Datang Di Aplikasi<br>
                        SILINDAK<br>
                        <span class="silindak-text-yellow">(SISTEM INFORMASI LAYANAN PADjak)</span>
                    </h2>
                </div>

                <!-- Gambar Kanan -->
                <div class="silindak-image-right">
                    <img src="{{ asset('assets/img/pak_camat.png') }}" alt="Pak Camat">
                </div>
            </div>
        </div> --}}

        {{-- banner --}}
        <div class="silindak-header-banner mb-4">
            <img src="{{ asset('assets/img/banner.jpeg') }}" alt="banner"
                class="w-full h-auto rounded-lg shadow-md object-cover">
        </div>

        <!-- Slogan Berjalan -->
        @if ($slogans->isNotEmpty())
            <div class="overflow-hidden px-2 mb-5">
                <div
                    class="inline-block animate-marquee text-lg sm:text-xl text-white font-medium tracking-wide py-2 mt-2 mb-5">
                    @foreach ($slogans as $slogan)
                        <span class="mx-10">🌟 {{ $slogan->isi }}</span>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <style>
        .silindak-header * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .silindak-header {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .silindak-header-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            min-height: 120px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .silindak-image-left {
            position: absolute;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .silindak-image-left img {
            width: 100%;
            max-width: 280px;
            height: auto;
            object-fit: contain;
        }

        .silindak-text-center {
            text-align: center;
            padding: 0 16px;
            z-index: 2;
            flex: 1;
            max-width: 600px;
        }

        .silindak-text-center h2 {
            font-size: 1.75rem;
            font-weight: bold;
            color: white;
            line-height: 1.3;
            margin-bottom: 8px;
        }

        .silindak-text-yellow {
            color: #d97706;
            display: block;
            margin-top: 4px;
        }

        .silindak-image-right {
            position: absolute;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .silindak-image-right img {
            width: 100%;
            max-width: 160px;
            height: auto;
            object-fit: contain;
        }

        .silindak-header-banner {
            width: 100%;
            overflow: hidden;
            border-radius: 12px;
        }

        .silindak-header-banner img {
            width: 100%;
            height: auto;
            object-fit: contain;
            border-radius: 12px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .silindak-header-container {
                flex-direction: column;
                position: static;
                min-height: auto;
                gap: 20px;
            }

            .silindak-image-left,
            .silindak-image-right {
                position: static;
                order: 2;
            }

            .silindak-text-center {
                order: 1;
                max-width: 100%;
                padding: 0 20px;
            }

            .silindak-text-center h2 {
                font-size: 1.25rem;
            }

            .silindak-image-left img {
                max-width: 200px;
            }

            .silindak-image-right img {
                max-width: 110px;
            }

            /* Layout mobile: gambar kiri - text - gambar kanan */
            .silindak-header-container {
                display: grid;
                grid-template-columns: auto 1fr auto;
                grid-template-areas: "left center right";
                align-items: center;
                gap: 10px;
            }

            .silindak-image-left {
                grid-area: left;
            }

            .silindak-text-center {
                grid-area: center;
                order: unset;
            }

            .silindak-image-right {
                grid-area: right;
                order: unset;
            }
        }

        @media (max-width: 640px) {
            .silindak-text-center h2 {
                font-size: 1.1rem;
            }

            .silindak-header-container {
                gap: 8px;
            }

            .silindak-image-left img {
                max-width: 130px;
            }

            .silindak-image-right img {
                max-width: 70px;
            }
        }

        @media (max-width: 480px) {
            .silindak-text-center h2 {
                font-size: 1rem;
            }

            .silindak-header-container {
                gap: 6px;
                padding: 0 10px;
            }

            .silindak-image-left img {
                max-width: 110px;
            }

            .silindak-image-right img {
                max-width: 60px;
            }

            .silindak-text-center {
                padding: 0 8px;
            }
        }

        /* Very small screens */
        @media (max-width: 360px) {
            .silindak-text-center h2 {
                font-size: 0.95rem;
            }

            .silindak-image-left img {
                max-width: 90px;
            }

            .silindak-image-right img {
                max-width: 50px;
            }
        }

        /* Very small screens */
        @media (max-width: 360px) {
            .silindak-text-center h2 {
                font-size: 0.95rem;
            }

            .silindak-image-left img {
                max-width: 90px;
            }

            .silindak-image-right img {
                max-width: 50px;
            }
        }

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
