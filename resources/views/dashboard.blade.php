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
                                            Silinda Kabupaten Serdang Bedagai</h2>
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
                                                    <tr>
                                                        <td class="whitespace-nowrap">
                                                            {{ $row->nm_kelurahan }}
                                                        </td>
                                                        <td class="text-right">
                                                            {{ number_format($row->total_wp, 0, ',', '.') }}
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'sdh_bayar']) }}"
                                                                class="text-success underline">
                                                                {{ number_format($row->sdh_bayar, 0, ',', '.') }}
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'blm_bayar']) }}"
                                                                class="text-danger underline">
                                                                {{ number_format($row->blm_bayar, 0, ',', '.') }}
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('pajak.detail', [$row->kd_kelurahan, 'krg_bayar']) }}"
                                                                class="text-warning underline">
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
                                                    {{-- <canvas id="chart-performance-keseluruhan"
                                                        class="mr-auto ml-auto"></canvas> --}}
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
                                                    {{-- <div
                                                        class="mt-5 xxl:flex xxl:justify-center xxl:mt-0 xxl:-ml-20 xxl:w-14 xxl:flex-none xxl:pl-2.5">
                                                        <div
                                                            class="font-medium inline-flex bg-theme-10 text-white rounded px-2 py-1 text-2xl xxl:text-3xl xxl:p-0 xxl:text-theme-10 xxl:bg-transparent xxl:flex items-center tooltip cursor-pointer xxl:justify-center">
                                                            <span class="persentase-penerimaan">29,83</span>%
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- <div
                                    class="row-start-3 2xl:row-start-2 col-start-1 2xl:col-start-7 col-span-12 2xl:col-span-6">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 lg:col-span-6">
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
                                                            Penerimaan Per Jenis Pajak
                                                        </span>
                                                    </div>
                                                    <div class="-mb-1.5 -ml-2.5">
                                                        <div id="chart-per-pajak"
                                                            data-series="[{&quot;name&quot;:&quot;Penerimaan&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Reklame&quot;,&quot;y&quot;:827146781.94},{&quot;x&quot;:&quot;PAT&quot;,&quot;y&quot;:840695880},{&quot;x&quot;:&quot;Walet&quot;,&quot;y&quot;:120000},{&quot;x&quot;:&quot;MBLB&quot;,&quot;y&quot;:4188293092},{&quot;x&quot;:&quot;PPJ&quot;,&quot;y&quot;:11514671476},{&quot;x&quot;:&quot;Restoran&quot;,&quot;y&quot;:5422144219},{&quot;x&quot;:&quot;Hotel&quot;,&quot;y&quot;:1665144937},{&quot;x&quot;:&quot;Parkir&quot;,&quot;y&quot;:80118353},{&quot;x&quot;:&quot;Hiburan&quot;,&quot;y&quot;:125635000},{&quot;x&quot;:&quot;BPHTB&quot;,&quot;y&quot;:2690475251},{&quot;x&quot;:&quot;PBB&quot;,&quot;y&quot;:3472845226}]}]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-span-12 lg:col-span-6 mb-3">
                                            <div class="report-box-2 intro-y mt-3">
                                                <div class="box p-5 fullscreen-wrapper">
                                                    <div class="absolute pt-0.5 2xl:pt-0 mt-5 mr-5 top-0 right-0">
                                                        <a href="#" data-toggle-fullscreen="chart-per-bulan"><span
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
                                                            Tren Penerimaan Pajak Per Bulan
                                                        </span>
                                                    </div>
                                                    <div class="-mb-1.5 -ml-2.5">
                                                        <div id="chart-per-bulan"
                                                            data-series="[{&quot;name&quot;:&quot;Reklame&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:27137925},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:143343543},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:117541874},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:104759845},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:231428667.94},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:154761842},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:48173085},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PAT&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:175922765},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:170744904},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:141688384},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:158811650},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:176668177},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:16860000},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Walet&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:120000},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;MBLB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:872897147},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:543046143},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:253535873},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:491563084},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1058929469},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:662337711},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:305983665},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PPJ&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:2163216855},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:1926315874},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:1706318569},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:1578751088},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1920507413},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:2047298784},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:172262893},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Restoran&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:1061739972},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:921785900},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:591110943},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:792066300},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1050436133},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:749541598},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:255463373},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Hotel&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:361527249},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:275921356},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:241330052},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:180947633},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:264830848},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:276352253},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:64235546},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Parkir&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:8715755},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:22076300},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:7423298},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:13681100},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:7091400},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:9259050},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:11871450},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Hiburan&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:24129770},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:24872850},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:21339440},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:1539000},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:19601110},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:23224080},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:10928750},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;BPHTB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:&quot;48185100&quot;},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:&quot;457770000&quot;},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:&quot;692055773&quot;},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:&quot;314331565&quot;},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:&quot;427180596&quot;},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:&quot;297315927&quot;},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:&quot;453636290&quot;},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PBB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:&quot;18458710&quot;},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:&quot;140550426&quot;},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:&quot;718907000&quot;},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:&quot;754086113&quot;},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:&quot;727645792&quot;},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:&quot;785679465&quot;},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:&quot;327517720&quot;},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]}]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    {{-- <div class="report-box-3 px-5 pt-8 pb-14 col-span-12 z-10">
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
                                                data-series="[827146781.94,840695880,120000,4188293092,11514671476,5422144219,1665144937,80118353,125635000,2690475251,3472845226]">
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
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">39.27%</span></div>
                                                    <div class="text-gray-600 mt-1">Reklame</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1104" data-series="39.27" data-counter="0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">8.77%</span></div>
                                                    <div class="text-gray-600 mt-1">PAT</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1108" data-series="8.77" data-counter="1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">0.08%</span></div>
                                                    <div class="text-gray-600 mt-1">Walet</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1109" data-series="0.08" data-counter="2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">23.97%</span></div>
                                                    <div class="text-gray-600 mt-1">MBLB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1106" data-series="23.97" data-counter="3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">38.37%</span></div>
                                                    <div class="text-gray-600 mt-1">PPJ</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1105" data-series="38.37" data-counter="4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">39.52%</span></div>
                                                    <div class="text-gray-600 mt-1">Restoran</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1102" data-series="39.52" data-counter="5">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">39.42%</span></div>
                                                    <div class="text-gray-600 mt-1">Hotel</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1101" data-series="39.42" data-counter="6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">10.24%</span></div>
                                                    <div class="text-gray-600 mt-1">Parkir</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1107" data-series="10.24" data-counter="7">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">46.45%</span></div>
                                                    <div class="text-gray-600 mt-1">Hiburan</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1103" data-series="46.45" data-counter="8">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">23.11%</span></div>
                                                    <div class="text-gray-600 mt-1">BPHTB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1113" data-series="23.11" data-counter="9">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span
                                                            class="persentase-per-pajak">25.99%</span></div>
                                                    <div class="text-gray-600 mt-1">PBB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1114" data-series="25.99" data-counter="10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
