@extends('layouts.app')

@section('title', 'Beranda')
<style>
    .badge {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 0.25rem;
        display: inline-block;
    }

    .badge-blue {
        background-color: #3b82f6;
        /* Tailwind blue-500 */
        color: white;
    }

    .badge-red {
        background-color: #ef4444;
        /* Tailwind red-500 */
        color: white;
    }

    .badge-yellow {
        background-color: #facc15;
        /* Tailwind yellow-400 */
        color: black;
    }

    .badge-gray {
        background-color: #e5e7eb;
        /* Tailwind gray-200 */
        color: black;
    }
</style>
@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">

                {{-- <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10"
                    style="margin-top: 25px;">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div
                                class="row-span-1 lg:row-span-2 col-span-12 sm:col-span-12 lg:col-span-6 xl:col-span-8 2xl:col-span-6 mt-2">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">Tabulasi Penerimaan Pajak PBB Per Kecamatan
                                    </h2>
                                </div>
                                <div id="table-penerimaan-per-kecamatan" class="intro-y overflow-auto mt-8 sm:mt-0">
                                    <table class="table table-report table-report--small sm:mt-0">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">KECAMATAN</th>
                                                <th class="text-center whitespace-nowrap">KETETAPAN (Rp.)</th>
                                                <th class="text-center whitespace-nowrap">REALISASI (Rp.)</th>
                                                <th class="text-center whitespace-nowrap">PROGRES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            <tr class="border-spa" data-row="BATUI">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/020">BATUI</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    2.706.665.528
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    181.860.180
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    6,72 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/053">LUWUK
                                                        SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="1">
                                                    1.567.490.976
                                                </td>

                                                <td class="text-right" data-col="1">
                                                    511.813.128
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    32,65 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BUALEMO">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/061">BUALEMO</a>
                                                </td>

                                                <td class="text-right" data-col="13">
                                                    261.032.713
                                                </td>

                                                <td class="text-right" data-col="13">
                                                    65.139.492
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    24,95 %
                                                </td>

                                            </tr>
                                            <tr data-row="total">
                                                <td><strong>Total</strong></td>
                                                <td class="text-right"><strong>11.236.975.267</strong></td>
                                                <td class="text-right"><strong>3.459.167.318</strong></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div
                                class="row-start-2 lg:row-start-1 lg:col-start-7 xl:col-start-9 2xl:col-start-7 col-span-12 lg:col-span-6 xl:col-span-4 2xl:col-span-6">
                                <div class="col-span-12">
                                    <div class="box p-5 mt-5 bg-theme-32 text-gray-300">
                                        <div class="grid grid-cols-12 gap-6">
                                            <div
                                                class="col-span-12 sm:col-span-6 lg:col-span-12 2xl:col-span-6 text-center">
                                                <canvas id="chart-performance-keseluruhan" class="mr-auto ml-auto"></canvas>
                                            </div>

                                            <div class="col-span-12 sm:col-span-6 lg:col-span-12 2xl:col-span-6">
                                                <div
                                                    class="text-base xxl:text-lg justify-center sm:justify-start flex items-center dark:text-gray-500 leading-3 mt-5 mb-4">
                                                    Total Penerimaan</div>
                                                <div class="flex items-center justify-center sm:justify-start">
                                                    <div
                                                        class="relative text-2xl xxl:text-3xl font-medium leading-6 pl-8 xxl:pl-8">
                                                        <span
                                                            class="absolute text-xl xxl:text-2xl top-0 left-0 -mt-1 xxl:mt-0">Rp.</span><span
                                                            class="total-penerimaan">3.459.167.318</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 xxl:flex xxl:justify-center xxl:mt-0 xxl:-ml-20 xxl:w-14 xxl:flex-none xxl:pl-2.5">
                                                    <div
                                                        class="font-medium inline-flex bg-theme-10 text-white rounded px-2 py-1 text-2xl xxl:text-3xl xxl:p-0 xxl:text-theme-10 xxl:bg-transparent xxl:flex items-center tooltip cursor-pointer xxl:justify-center">
                                                        <span class="persentase-penerimaan">30,78</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div
                    class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div class="col-span-12 mt-2">

                                <!-- Judul -->
                                <div class="intro-y block sm:flex items-center h-10 mt-5">
                                    <h2 class="text-lg font-medium truncate mr-5">Data Wajib Pajak Kecamatan Silinda</h2>
                                </div>

                                <!-- Search Form -->
                                <form method="GET" action="{{ route('pbb.index') }}" class="mt-4">
                                    <div class="flex items-center gap-2">
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            class="input w-full sm:w-64 box" placeholder="Cari NOP, Nama, atau Alamat...">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </form>

                                <!-- Table -->
                                <div id="table-data-wp" class="intro-y overflow-auto mt-8 sm:mt-0">
                                    <table class="table table-report table-report--small sm:mt-0">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">NOP</th>
                                                <th class="whitespace-nowrap">NAMA WP</th>
                                                <th class="whitespace-nowrap">ALAMAT</th>
                                                <th class="text-right whitespace-nowrap">LUAS TANAH (m²)</th>
                                                <th class="text-right whitespace-nowrap">LUAS BANGUNAN (m²)</th>
                                                <th class="text-right whitespace-nowrap">PAJAK TERHUTANG</th>
                                                <th class="text-center whitespace-nowrap">STATUS</th>
                                                <th class="text-center whitespace-nowrap">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            @forelse ($data_wp as $wp)
                                                <tr>
                                                    <td class="whitespace-nowrap">{{ $wp->nop }}</td>
                                                    <td class="whitespace-nowrap">{{ $wp->nama_wp }}</td>
                                                    <td class="whitespace-nowrap">{{ $wp->alamat }}</td>
                                                    <td class="text-right">{{ number_format($wp->luas_bumi, 0, ',', '.') }}
                                                    </td>
                                                    <td class="text-right">{{ number_format($wp->luas_bng, 0, ',', '.') }}
                                                    </td>
                                                    <td class="text-right">
                                                        {{ number_format($wp->yg_harus_byr, 0, ',', '.') }}</td>
                                                    <td class="p-2 border-b">
                                                        <span
                                                            class="badge 
                                                                @if ($wp->status === 'LUNAS') badge-blue 
                                                                @elseif ($wp->status === 'BELUM BAYAR') badge-red 
                                                                @elseif ($wp->status === 'KURANG BAYAR') badge-yellow 
                                                                @else badge-gray @endif">
                                                            {{ $wp->status ?? '-' }}
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('pbb.history', ['nop' => $wp->nop]) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center text-slate-500 italic">Data tidak
                                                        ditemukan.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="mt-4">
                                    {{ $data_wp->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
