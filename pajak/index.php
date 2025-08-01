<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="vH6XCFCkrdxaXoq5tGkpTlaJZdFs0COPoSRR73DR">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Penerimaan Pajak Daerah</title>

    <link href="https://serdangbedagaikab.go.id/public/img/konfigurasi/icon/1707727384_a8b2347885b23f3bca14.png" rel="shortcut icon">


    <link rel="stylesheet" href="/pajak/assets/css/app.css" />
</head>

<body class="main" data-pallete="[&quot;#78C091&quot;,&quot;#FEB139&quot;,&quot;#547AA5&quot;,&quot;#1C6758&quot;,&quot;#B9005B&quot;,&quot;#00072D&quot;,&quot;#EB1D36&quot;,&quot;#A5BECC&quot;,&quot;#CDC1FF&quot;,&quot;#790252&quot;,&quot;#A27B5C&quot;,&quot;#B0FE76&quot;]">
    <div class="top-bar-boxed border-b border-theme-36 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-10">
        <div class="flex items-center justify-between h-full">
            <!-- Logo dan Teks -->
            <div class="flex items-center space-x-6">
                <img src="https://serdangbedagaikab.go.id/public/img/konfigurasi/icon/1707727384_a8b2347885b23f3bca14.png" alt="Logo" class="mr-6" style="height: 40px">
                <a href="" class="cursor-pointer text-gray-300 text-lg">
                    <strong>Dashboard <span class="font-medium">Kecamatan Silindak</span></strong>
                </a>
            </div>

            <div class="ml-auto">
                <div id="date-time" class="text-gray-300 text-sm font-medium"></div>
            </div>
        </div>
    </div>



    <nav class="top-nav">
        <ul>
            <li>
                <a href="/pajak" class="top-menu top-menu--active">
                    <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="top-menu__title"> Dashboard <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="pbb.php" class="top-menu ">
                    <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="top-menu__title"> Realisasi PBB <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
        </ul>
    </nav>

    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="row-span-1 lg:row-span-2 col-span-12 sm:col-span-12 lg:col-span-6 xl:col-span-8 2xl:col-span-6 mt-2">
                                    <div class="block sm:flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">Tabulasi Penerimaan Pajak Daerah</h2>
                                    </div>
                                    <div id="table-realisasi" class="overflow-auto mt-8 sm:mt-0">
                                        <table class="table table-report table-report--small sm:mt-0">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">JENIS PAJAK</th>
                                                    <th class="text-center whitespace-nowrap">TARGET (Rp.)</th>
                                                    <th class="text-center whitespace-nowrap">REALISASI (Rp.)</th>
                                                    <th class="text-center whitespace-nowrap">PROGRESS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-spa" data-row="1104">
                                                    <td class="whitespace-nowrap">
                                                        Pajak Reklame
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        2.106.112.090
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        827.146.782
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        39,27 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1108">
                                                    <td class="whitespace-nowrap">
                                                        Pajak Air Tanah
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        9.591.421.596
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        840.695.880
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        8,77 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1109">
                                                    <td class="whitespace-nowrap">
                                                        Pajak Sarang Burung Walet
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        150.000.000
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        120.000
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        0,08 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1106">
                                                    <td class="whitespace-nowrap">
                                                        Pajak Mineral Bukan Logam dan Batuan
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        17.475.578.773
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        4.188.293.092
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        23,97 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1105">
                                                    <td class="whitespace-nowrap">
                                                        PBJT Tenaga Listrik
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        30.011.028.705
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        11.514.671.476
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        38,37 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1102">
                                                    <td class="whitespace-nowrap">
                                                        PBJT Makanan dan/atau Minuman
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        13.718.474.617
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        5.422.144.219
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        39,52 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1101">
                                                    <td class="whitespace-nowrap">
                                                        PBJT Perhotelan
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        4.224.484.012
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        1.665.144.937
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        39,42 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1107">
                                                    <td class="whitespace-nowrap">
                                                        PBJT Jasa Parkir
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        782.445.188
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        80.118.353
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        10,24 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1103">
                                                    <td class="whitespace-nowrap">
                                                        PBJT Jasa Kesenian dan Hiburan
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        270.461.044
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        125.635.000
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        46,45 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1113">
                                                    <td class="whitespace-nowrap">
                                                        BPHTB
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        11.642.682.484
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        2.690.475.251
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        23,11 %
                                                    </td>
                                                </tr>
                                                <tr class="border-spa" data-row="1114">
                                                    <td class="whitespace-nowrap">
                                                        PBB-P2
                                                    </td>
                                                    <td class="text-right" data-col="target">
                                                        13.360.359.155
                                                    </td>
                                                    <td class="text-right" data-col="penerimaan">
                                                        3.472.845.226
                                                    </td>
                                                    <td class="text-right" data-col="progress">
                                                        25,99 %
                                                    </td>
                                                </tr>


                                                <tr data-row="total">
                                                    <td><strong>TOTAL</strong></td>
                                                    <td class="text-right font-bold" data-col="target">103.333.047.664</td>
                                                    <td class="text-right font-bold" data-col="penerimaan">30.827.290.216</td>

                                                    <td class="text-right font-bold" data-col="progress">29,83%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="row-start-2 lg:row-start-1 lg:col-start-7 xl:col-start-9 2xl:col-start-7 col-span-12 lg:col-span-6 xl:col-span-4 2xl:col-span-6">
                                    <div class="col-span-12">
                                        <div class="box p-5 mt-5 bg-theme-32 text-gray-300">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-12 sm:col-span-6 lg:col-span-12 2xl:col-span-6 text-center">
                                                    <canvas id="chart-performance-keseluruhan" class="mr-auto ml-auto"></canvas>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6 lg:col-span-12 2xl:col-span-6">
                                                    <div class="text-base xxl:text-lg justify-center sm:justify-start flex items-center dark:text-gray-500 leading-3 mt-5 mb-4">Total Penerimaan</div>
                                                    <div class="flex items-center justify-center sm:justify-start">
                                                        <div class="relative text-2xl xxl:text-3xl font-medium leading-6 pl-8 xxl:pl-8">
                                                            <span class="absolute text-xl xxl:text-2xl top-0 left-0 -mt-1 xxl:mt-0">Rp.</span><span class="total-penerimaan">30.827.290.216</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-5 xxl:flex xxl:justify-center xxl:mt-0 xxl:-ml-20 xxl:w-14 xxl:flex-none xxl:pl-2.5">
                                                        <div class="font-medium inline-flex bg-theme-10 text-white rounded px-2 py-1 text-2xl xxl:text-3xl xxl:p-0 xxl:text-theme-10 xxl:bg-transparent xxl:flex items-center tooltip cursor-pointer xxl:justify-center">
                                                            <span class="persentase-penerimaan">29,83</span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row-start-3 2xl:row-start-2 col-start-1 2xl:col-start-7 col-span-12 2xl:col-span-6">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="report-box-2 intro-y mt-3">
                                                <div class="box p-5 fullscreen-wrapper">
                                                    <div class="absolute pt-0.5 2xl:pt-0 mt-5 mr-5 top-0 right-0">
                                                        <a href="#" data-toggle-fullscreen="chart-per-pajak"><span class="maximize-icon" style="display:inline;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="maximize-2" data-lucide="maximize-2" class="lucide lucide-maximize-2 block mx-auto">
                                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                                    <polyline points="9 21 3 21 3 15"></polyline>
                                                                    <line x1="21" y1="3" x2="14" y2="10"></line>
                                                                    <line x1="3" y1="21" x2="10" y2="14"></line>
                                                                </svg>
                                                            </span>

                                                            <span class="minimize-icon" style="display:none;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="minimize-2" data-lucide="minimize-2" class="lucide lucide-minimize-2 block mx-auto">
                                                                    <polyline points="4 14 10 14 10 20"></polyline>
                                                                    <polyline points="20 10 14 10 14 4"></polyline>
                                                                    <line x1="14" y1="10" x2="21" y2="3"></line>
                                                                    <line x1="3" y1="21" x2="10" y2="14"></line>
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
                                                        <div id="chart-per-pajak" data-series="[{&quot;name&quot;:&quot;Penerimaan&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Reklame&quot;,&quot;y&quot;:827146781.94},{&quot;x&quot;:&quot;PAT&quot;,&quot;y&quot;:840695880},{&quot;x&quot;:&quot;Walet&quot;,&quot;y&quot;:120000},{&quot;x&quot;:&quot;MBLB&quot;,&quot;y&quot;:4188293092},{&quot;x&quot;:&quot;PPJ&quot;,&quot;y&quot;:11514671476},{&quot;x&quot;:&quot;Restoran&quot;,&quot;y&quot;:5422144219},{&quot;x&quot;:&quot;Hotel&quot;,&quot;y&quot;:1665144937},{&quot;x&quot;:&quot;Parkir&quot;,&quot;y&quot;:80118353},{&quot;x&quot;:&quot;Hiburan&quot;,&quot;y&quot;:125635000},{&quot;x&quot;:&quot;BPHTB&quot;,&quot;y&quot;:2690475251},{&quot;x&quot;:&quot;PBB&quot;,&quot;y&quot;:3472845226}]}]"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-span-12 lg:col-span-6 mb-3">
                                            <div class="report-box-2 intro-y mt-3">
                                                <div class="box p-5 fullscreen-wrapper">
                                                    <div class="absolute pt-0.5 2xl:pt-0 mt-5 mr-5 top-0 right-0">
                                                        <a href="#" data-toggle-fullscreen="chart-per-bulan"><span class="maximize-icon" style="display:inline;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="maximize-2" data-lucide="maximize-2" class="lucide lucide-maximize-2 block mx-auto">
                                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                                    <polyline points="9 21 3 21 3 15"></polyline>
                                                                    <line x1="21" y1="3" x2="14" y2="10"></line>
                                                                    <line x1="3" y1="21" x2="10" y2="14"></line>
                                                                </svg>
                                                            </span>

                                                            <span class="minimize-icon" style="display:none;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="minimize-2" data-lucide="minimize-2" class="lucide lucide-minimize-2 block mx-auto">
                                                                    <polyline points="4 14 10 14 10 20"></polyline>
                                                                    <polyline points="20 10 14 10 14 4"></polyline>
                                                                    <line x1="14" y1="10" x2="21" y2="3"></line>
                                                                    <line x1="3" y1="21" x2="10" y2="14"></line>
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
                                                        <div id="chart-per-bulan" data-series="[{&quot;name&quot;:&quot;Reklame&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:27137925},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:143343543},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:117541874},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:104759845},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:231428667.94},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:154761842},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:48173085},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PAT&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:175922765},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:170744904},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:141688384},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:158811650},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:176668177},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:16860000},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Walet&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:120000},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;MBLB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:872897147},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:543046143},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:253535873},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:491563084},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1058929469},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:662337711},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:305983665},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PPJ&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:2163216855},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:1926315874},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:1706318569},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:1578751088},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1920507413},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:2047298784},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:172262893},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Restoran&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:1061739972},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:921785900},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:591110943},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:792066300},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:1050436133},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:749541598},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:255463373},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Hotel&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:361527249},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:275921356},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:241330052},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:180947633},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:264830848},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:276352253},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:64235546},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Parkir&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:8715755},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:22076300},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:7423298},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:13681100},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:7091400},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:9259050},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:11871450},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;Hiburan&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:24129770},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:24872850},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:21339440},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:1539000},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:19601110},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:23224080},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:10928750},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;BPHTB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:&quot;48185100&quot;},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:&quot;457770000&quot;},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:&quot;692055773&quot;},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:&quot;314331565&quot;},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:&quot;427180596&quot;},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:&quot;297315927&quot;},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:&quot;453636290&quot;},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]},{&quot;name&quot;:&quot;PBB&quot;,&quot;data&quot;:[{&quot;x&quot;:&quot;Jan&quot;,&quot;y&quot;:&quot;18458710&quot;},{&quot;x&quot;:&quot;Feb&quot;,&quot;y&quot;:&quot;140550426&quot;},{&quot;x&quot;:&quot;Mar&quot;,&quot;y&quot;:&quot;718907000&quot;},{&quot;x&quot;:&quot;Apr&quot;,&quot;y&quot;:&quot;754086113&quot;},{&quot;x&quot;:&quot;Mei&quot;,&quot;y&quot;:&quot;727645792&quot;},{&quot;x&quot;:&quot;Jun&quot;,&quot;y&quot;:&quot;785679465&quot;},{&quot;x&quot;:&quot;Jul&quot;,&quot;y&quot;:&quot;327517720&quot;},{&quot;x&quot;:&quot;Agu&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Sep&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Okt&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Nov&quot;,&quot;y&quot;:0},{&quot;x&quot;:&quot;Des&quot;,&quot;y&quot;:0}]}]"></div>
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
                                    <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Kontribusi Per Pajak</div>
                                </div>

                                <div class="col-span-12 mt-4">
                                    <div class="box p-5 mt-4 zoom-in">
                                        <div class="-mb-1.5 -ml-2.5">
                                            <div id="chart-kontribusi-per-pajak" data-series="[827146781.94,840695880,120000,4188293092,11514671476,5422144219,1665144937,80118353,125635000,2690475251,3472845226]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-8 px-0 lg:px-6 xl:px-0 xxl:px-6">
                                <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                                    <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Performa Per Pajak</div>
                                </div>

                                <div class="grid grid-cols-12 gap-6 relative">
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">39.27%</span></div>
                                                    <div class="text-gray-600 mt-1">Reklame</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1104" data-series="39.27" data-counter="0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">8.77%</span></div>
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
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">0.08%</span></div>
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
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">23.97%</span></div>
                                                    <div class="text-gray-600 mt-1">MBLB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1106" data-series="23.97" data-counter="3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">38.37%</span></div>
                                                    <div class="text-gray-600 mt-1">PPJ</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1105" data-series="38.37" data-counter="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">39.52%</span></div>
                                                    <div class="text-gray-600 mt-1">Restoran</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1102" data-series="39.52" data-counter="5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">39.42%</span></div>
                                                    <div class="text-gray-600 mt-1">Hotel</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1101" data-series="39.42" data-counter="6"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">10.24%</span></div>
                                                    <div class="text-gray-600 mt-1">Parkir</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1107" data-series="10.24" data-counter="7"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">46.45%</span></div>
                                                    <div class="text-gray-600 mt-1">Hiburan</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1103" data-series="46.45" data-counter="8"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">23.11%</span></div>
                                                    <div class="text-gray-600 mt-1">BPHTB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1113" data-series="23.11" data-counter="9"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                                        <div class="box px-5 mt-4 zoom-in">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="text-lg font-medium truncate"><span class="persentase-per-pajak">25.99%</span></div>
                                                    <div class="text-gray-600 mt-1">PBB</div>
                                                </div>
                                                <div class="flex-none ml-auto relative">
                                                    <div id="performance-1114" data-series="25.99" data-counter="10"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
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
                                                <th class="whitespace-nowrap">JENIS PAJAK</th>
                                                <th class="text-center whitespace-nowrap">JANUARI</th>
                                                <th class="text-center whitespace-nowrap">FEBRUARI</th>
                                                <th class="text-center whitespace-nowrap">MARET</th>
                                                <th class="text-center whitespace-nowrap">APRIL</th>
                                                <th class="text-center whitespace-nowrap">MEI</th>
                                                <th class="text-center whitespace-nowrap">JUNI</th>
                                                <th class="text-center whitespace-nowrap">JULI</th>
                                                <th class="text-center whitespace-nowrap">AGUSTUS</th>
                                                <th class="text-center whitespace-nowrap">SEPTEMBER</th>
                                                <th class="text-center whitespace-nowrap">OKTOBER</th>
                                                <th class="text-center whitespace-nowrap">NOVEMBER</th>
                                                <th class="text-center whitespace-nowrap">DESEMBER</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            <tr class="border-spa" data-row="Pajak Reklame">
                                                <td class="whitespace-nowrap">
                                                    Pajak Reklame
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    27.137.925

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    143.343.543

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    117.541.874

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    104.759.845

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    231.428.668

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    154.761.842

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    48.173.085

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="Pajak Air Tanah">
                                                <td class="whitespace-nowrap">
                                                    Pajak Air Tanah
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    175.922.765

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    170.744.904

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    141.688.384

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    158.811.650

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    176.668.177

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    16.860.000

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="Pajak Sarang Burung Walet">
                                                <td class="whitespace-nowrap">
                                                    Pajak Sarang Burung Walet
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    120.000

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="Pajak Mineral Bukan Logam dan Batuan">
                                                <td class="whitespace-nowrap">
                                                    Pajak Mineral Bukan Logam dan Batuan
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    872.897.147

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    543.046.143

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    253.535.873

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    491.563.084

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    1.058.929.469

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    662.337.711

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    305.983.665

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBJT Tenaga Listrik">
                                                <td class="whitespace-nowrap">
                                                    PBJT Tenaga Listrik
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    2.163.216.855

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    1.926.315.874

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    1.706.318.569

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    1.578.751.088

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    1.920.507.413

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    2.047.298.784

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    172.262.893

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBJT Makanan dan/atau Minuman">
                                                <td class="whitespace-nowrap">
                                                    PBJT Makanan dan/atau Minuman
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    1.061.739.972

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    921.785.900

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    591.110.943

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    792.066.300

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    1.050.436.133

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    749.541.598

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    255.463.373

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBJT Perhotelan">
                                                <td class="whitespace-nowrap">
                                                    PBJT Perhotelan
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    361.527.249

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    275.921.356

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    241.330.052

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    180.947.633

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    264.830.848

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    276.352.253

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    64.235.546

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBJT Jasa Parkir">
                                                <td class="whitespace-nowrap">
                                                    PBJT Jasa Parkir
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    8.715.755

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    22.076.300

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    7.423.298

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    13.681.100

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    7.091.400

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    9.259.050

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    11.871.450

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBJT Jasa Kesenian dan Hiburan">
                                                <td class="whitespace-nowrap">
                                                    PBJT Jasa Kesenian dan Hiburan
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    24.129.770

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    24.872.850

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    21.339.440

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    1.539.000

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    19.601.110

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    23.224.080

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    10.928.750

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BPHTB">
                                                <td class="whitespace-nowrap">
                                                    BPHTB
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    48.185.100

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    457.770.000

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    692.055.773

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    314.331.565

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    427.180.596

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    297.315.927

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    453.636.290

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PBB-P2">
                                                <td class="whitespace-nowrap">
                                                    PBB-P2
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    18.458.710

                                                </td>
                                                <td class="text-right" data-col="1">
                                                    140.550.426

                                                </td>
                                                <td class="text-right" data-col="2">
                                                    718.907.000

                                                </td>
                                                <td class="text-right" data-col="3">
                                                    754.086.113

                                                </td>
                                                <td class="text-right" data-col="4">
                                                    727.645.792

                                                </td>
                                                <td class="text-right" data-col="5">
                                                    785.679.465

                                                </td>
                                                <td class="text-right" data-col="6">
                                                    327.517.720

                                                </td>
                                                <td class="text-right" data-col="7">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="8">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="9">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="10">
                                                    0

                                                </td>
                                                <td class="text-right" data-col="11">
                                                    0

                                                </td>
                                            </tr>

                                            <tr data-row="total">
                                                <td><strong>Total</strong></td>

                                                <td class="text-right bg-gray-500" data-col="0">
                                                    <strong>4.762.051.248</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="1">
                                                    <strong>4.626.427.296</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="2">
                                                    <strong>4.491.251.206</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="3">
                                                    <strong>4.390.537.378</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="4">
                                                    <strong>5.884.319.606</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="5">
                                                    <strong>5.022.630.710</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="6">
                                                    <strong>1.650.072.772</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="7">
                                                    <strong>0</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="8">
                                                    <strong>0</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="9">
                                                    <strong>0</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="10">
                                                    <strong>0</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="11">
                                                    <strong>0</strong>
                                                </td>
                                            </tr>
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
</body>

<script>
    var pallete = document.querySelector(".main").getAttribute('data-pallete').replace(/"/g, '').replace('[', '').replace(']', '').split(',');
</script>

<script src="/pajak/assets/js/gauge.min.js"></script>

<script src="/pajak/assets/js/app.js"></script>

<script>
    function updateDateTime() {
        const now = new Date();

        // Deteksi zona waktu pengguna secara otomatis
        const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

        // Format tanggal & waktu sesuai lokasi pengguna
        const options = {
            weekday: 'long',
            day: '2-digit',
            month: 'long',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            hour12: false, // Format 24 jam
            timeZone: userTimeZone // Menyesuaikan zona waktu pengguna
        };

        const formattedDate = new Intl.DateTimeFormat('id-ID', options).format(now);

        // Tampilkan di halaman
        document.getElementById("date-time").textContent = `${formattedDate} (${userTimeZone})`;
    }

    // Update waktu setiap menit (lebih efisien daripada per detik)
    setInterval(updateDateTime, 60000);
    updateDateTime(); // Jalankan langsung saat halaman dimuat
</script>
<script>
    cash(function() {
        const ele = document.getElementById('table-realisasi');
        ele.style.cursor = 'grab';

        let pos = {
            top: 0,
            left: 0,
            x: 0,
            y: 0
        };

        const mouseDownHandler = function(e) {
            ele.style.cursor = 'grabbing';
            ele.style.userSelect = 'none';

            pos = {
                left: ele.scrollLeft,
                top: ele.scrollTop,
                x: e.clientX,
                y: e.clientY,
            };

            document.addEventListener('mousemove', mouseMoveHandler);
            document.addEventListener('mouseup', mouseUpHandler);
        };

        const mouseMoveHandler = function(e) {
            const dx = e.clientX - pos.x;
            const dy = e.clientY - pos.y;

            ele.scrollTop = pos.top - dy;
            ele.scrollLeft = pos.left - dx;
        };

        const mouseUpHandler = function() {
            ele.style.cursor = 'grab';
            ele.style.removeProperty('user-select');

            document.removeEventListener('mousemove', mouseMoveHandler);
            document.removeEventListener('mouseup', mouseUpHandler);
        };

        ele.addEventListener('mousedown', mouseDownHandler);
    });
</script>
<script>
    cash(function() {
        document.querySelector('[data-toggle-fullscreen="chart-per-pajak"]').addEventListener("click", (event) => {
            let el = event.srcElement.closest('.fullscreen-wrapper');

            if (document.fullscreenElement) {
                document.exitFullscreen();
                el.querySelector('.maximize-icon').style.display = 'inline';
                el.querySelector('.minimize-icon').style.display = 'none';
                ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            } else {
                el.requestFullscreen();
                el.querySelector('.maximize-icon').style.display = 'none';
                el.querySelector('.minimize-icon').style.display = 'inline';
                ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                    chart: {
                        height: screen.height - 100
                    }
                }, true)
            }
        });

        document.addEventListener("fullscreenchange", (event) => {
            if (!document.fullscreenElement) {
                ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            }
        });
    });
</script>
<script>
    cash(function() {
        document.querySelector('[data-toggle-fullscreen="chart-per-bulan"]').addEventListener("click", (event) => {
            let el = event.srcElement.closest('.fullscreen-wrapper');

            if (document.fullscreenElement) {
                document.exitFullscreen();
                el.querySelector('.maximize-icon').style.display = 'inline';
                el.querySelector('.minimize-icon').style.display = 'none';
                ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            } else {
                el.requestFullscreen();
                el.querySelector('.maximize-icon').style.display = 'none';
                el.querySelector('.minimize-icon').style.display = 'inline';
                ApexCharts.exec('chart-per-bulan', 'updateOptions', {
                    chart: {
                        height: screen.height - 100
                    }
                }, true)
            }
        });

        document.addEventListener("fullscreenchange", (event) => {
            if (!document.fullscreenElement) {
                ApexCharts.exec('chart-per-bulan', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            }
        });
    });
</script>
<script>
    cash(function() {
        const ele = document.getElementById('table-penerimaan-per-bulan');
        ele.style.cursor = 'grab';

        let pos = {
            top: 0,
            left: 0,
            x: 0,
            y: 0
        };

        const mouseDownHandler = function(e) {
            ele.style.cursor = 'grabbing';
            ele.style.userSelect = 'none';

            pos = {
                left: ele.scrollLeft,
                top: ele.scrollTop,
                x: e.clientX,
                y: e.clientY,
            };

            document.addEventListener('mousemove', mouseMoveHandler);
            document.addEventListener('mouseup', mouseUpHandler);
        };

        const mouseMoveHandler = function(e) {
            const dx = e.clientX - pos.x;
            const dy = e.clientY - pos.y;

            ele.scrollTop = pos.top - dy;
            ele.scrollLeft = pos.left - dx;
        };

        const mouseUpHandler = function() {
            ele.style.cursor = 'grab';
            ele.style.removeProperty('user-select');

            document.removeEventListener('mousemove', mouseMoveHandler);
            document.removeEventListener('mouseup', mouseUpHandler);
        };

        ele.addEventListener('mousedown', mouseDownHandler);
    });
</script>

</html>