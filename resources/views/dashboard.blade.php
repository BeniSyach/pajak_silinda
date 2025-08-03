@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div
                                    class="row-span-1 lg:row-span-2 col-span-12 sm:col-span-12 lg:col-span-6 xl:col-span-8 2xl:col-span-6 mt-2">
                                    <div class="block sm:flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">Tabulasi Status Pajak Kecamatan
                                            Silinda Kabupaten Serdang Bedagai Tahun {{ date('Y') }}</h2>
                                    </div>
                                    <div id="table-realisasi" class="overflow-auto mt-8 sm:mt-0">
                                        <table class="table table-report table-report--small sm:mt-0 mb-10">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">Kelurahan</th>
                                                    <th class="text-center whitespace-nowrap">Total Wajib Pajak</th>
                                                    <th class="text-center whitespace-nowrap">Sudah Bayar</th>
                                                    <th class="text-center whitespace-nowrap">Belum Bayar</th>
                                                    <th class="text-center whitespace-nowrap">Kurang Bayar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $row)
                                                    @if (strtoupper($row->nm_kelurahan) === 'SILINDAK')
                                                        @continue
                                                    @endif
                                                    <tr>
                                                        <td class="whitespace-nowrap">
                                                            {{ $row->nm_kelurahan }}
                                                        </td>
                                                        <td class="text-right">
                                                            {{ number_format($row->total_wp, 0, ',', '.') }}
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'sdh_bayar']) }}"
                                                                style="color: #2563eb; text-decoration: underline;">
                                                                {{ number_format($row->sdh_bayar, 0, ',', '.') }}
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'blm_bayar']) }}"
                                                                style="color: #dc2626; text-decoration: underline;">
                                                                {{ number_format($row->blm_bayar, 0, ',', '.') }}
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'krg_bayar']) }}"
                                                                style="color: #facc15; text-decoration: underline;">
                                                                {{ number_format($row->krg_bayar, 0, ',', '.') }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
                                                    <canvas id="chart-performance-keseluruhan"
                                                        class="mr-auto ml-auto"></canvas>
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
                                                                class="total-penerimaan">{{ number_format($data_penerimaan->total_penerimaan, 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-5 xxl:flex xxl:justify-center xxl:mt-0 xxl:-ml-20 xxl:w-14 xxl:flex-none xxl:pl-2.5">
                                                        <div
                                                            class="font-medium inline-flex bg-theme-10 text-white rounded px-2 py-1 text-2xl xxl:text-3xl xxl:p-0 xxl:text-theme-10 xxl:bg-transparent xxl:flex items-center tooltip cursor-pointer xxl:justify-center">
                                                            <span class="persentase-penerimaan">
                                                                {{ number_format($persen, 2, ',', '.') }}
                                                            </span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div
                                    class="row-start-3 2xl:row-start-2 col-start-1 2xl:col-start-7 col-span-12 2xl:col-span-12">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 lg:col-span-12">
                                            <div class="report-box-2 intro-y mt-3">
                                                <div class="box p-5 fullscreen-wrapper">
                                                    <div class="absolute pt-0.5 2xl:pt-0 mt-5 mr-5 top-0 right-0">
                                                        <a href="#" data-toggle-fullscreen="chart-per-pajak"><span
                                                                class="maximize-icon" style="display:inline;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    icon-name="maximize-2" data-lucide="maximize-2"
                                                                    class="lucide lucide-maximize-2 block mx-auto">
                                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                                    <polyline points="9 21 3 21 3 15"></polyline>
                                                                    <line x1="21" y1="3" x2="14"
                                                                        y2="10"></line>
                                                                    <line x1="3" y1="21" x2="10"
                                                                        y2="14"></line>
                                                                </svg>
                                                            </span>

                                                            <span class="minimize-icon" style="display:none;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    icon-name="minimize-2" data-lucide="minimize-2"
                                                                    class="lucide lucide-minimize-2 block mx-auto">
                                                                    <polyline points="4 14 10 14 10 20"></polyline>
                                                                    <polyline points="20 10 14 10 14 4"></polyline>
                                                                    <line x1="14" y1="10" x2="21"
                                                                        y2="3"></line>
                                                                    <line x1="3" y1="21" x2="10"
                                                                        y2="14"></line>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="flex items-center pb-2">
                                                        <span class="text-gray-800 dark:text-gray-600 text-sm">
                                                            Penerimaan Per Kelurahan
                                                        </span>
                                                    </div>
                                                    <div class="-mb-1.5 -ml-2.5">
                                                        <div id="chart-per-pajak" class="w-full h-[700px]"
                                                            data-series='@json([['name' => 'Penerimaan Per Kelurahan', 'data' => $data_chart]])'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="report-box-3 px-5 pt-8 pb-14 col-span-12 z-10">
                        <div class="grid grid-cols-12 gap-6 relative">
                            <div class="col-span-12 xl:col-span-4 px-0 lg:px-6 xl:px-0 xxl:px-6">
                                <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                                    <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Kontribusi Per
                                        Pajak</div>
                                </div>

                                <div class="col-span-12 mt-4">
                                    <div class="box p-5 mt-4 zoom-in">
                                        <div class="-mb-1.5 -ml-2.5">
                                            <div id="chart-kontribusi-per-pajak"
                                                data-series='@json(collect($data_chart)->pluck('y'))'
                                                data-labels='@json(collect($data_chart)->pluck('x'))'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-8 px-0 lg:px-6 xl:px-0 xxl:px-6">
                                <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                                    <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Performa Per
                                        Pajak</div>
                                </div>

                                <div class="grid grid-cols-12 gap-6 relative">
                                    @foreach ($data_target_desa as $desa)
                                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                            <div class="box px-5 mt-4 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="w-2/4 flex-none">
                                                        <div class="text-lg font-medium truncate">
                                                            <span class="persentase-per-pajak">
                                                                {{ number_format($desa['persentase'], 2) }}%
                                                            </span>
                                                        </div>
                                                        <div class="text-gray-600 mt-1">
                                                            {{ $desa['nama_desa'] }} <br>
                                                            Target&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;Rp&nbsp;{{ number_format($desa['target'], 0, ',', '.') }}
                                                            <br>
                                                            Pendapatan&nbsp;&nbsp;:&nbsp;Rp&nbsp;{{ number_format($desa['penerimaan'], 0, ',', '.') }}
                                                        </div>
                                                    </div>
                                                    <div class="flex-none ml-auto relative">
                                                        <div id="performance-{{ $desa['kode_desa'] }}"
                                                            data-series="{{ $desa['persentase'] }}" data-counter="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div class="col-span-12 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">Penerimaan Pajak Per Bulan</h2>
                                </div>
                                <div id="table-penerimaan-per-bulan" class="intro-y overflow-auto mt-8 sm:mt-0">
                                    <table class="table table-report table-report--small sm:mt-0">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">KELURAHAN</th>
                                                @foreach (['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGT', 'SEP', 'OKT', 'NOV', 'DES'] as $bulan)
                                                    <th class="text-center whitespace-nowrap">{{ $bulan }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            @foreach ($data_per_desa as $kelurahan => $data_bulan)
                                                <tr>
                                                    <td class="whitespace-nowrap">{{ $kelurahan }}</td>
                                                    @for ($i = 1; $i <= 12; $i++)
                                                        <td class="text-right" data-col="{{ $i - 1 }}">
                                                            Rp. {{ number_format($data_bulan[$i] ?? 0, 0, ',', '.') }}
                                                        </td>
                                                    @endfor
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
