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
                <a href="/pajak" class="top-menu ">
                    <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="top-menu__title"> Dashboard <i data-feather="chevron-down" class="top-menu__sub-icon"></i></div>
                </a>
            </li>
            <li>
                <a href="pbb.php" class="top-menu top-menu--active">
                    <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="top-menu__title"> Realisasi PBB<i data-feather="chevron-down" class="top-menu__sub-icon"></i></div>
                </a>
            </li>
        </ul>
    </nav>

    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">

                <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10" style="margin-top: 25px;">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div class="row-span-1 lg:row-span-2 col-span-12 sm:col-span-12 lg:col-span-6 xl:col-span-8 2xl:col-span-6 mt-2">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">Tabulasi Penerimaan Pajak PBB Per Kecamatan</h2>
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
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/053">LUWUK SELATAN</a>
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
                                            <tr class="border-spa" data-row="LUWUK">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/050">LUWUK</a>
                                                </td>

                                                <td class="text-right" data-col="2">
                                                    1.585.960.414
                                                </td>

                                                <td class="text-right" data-col="2">
                                                    492.281.639
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    31,04 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="MASAMA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/071">MASAMA</a>
                                                </td>

                                                <td class="text-right" data-col="3">
                                                    373.766.869
                                                </td>

                                                <td class="text-right" data-col="3">
                                                    195.855.311
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    52,40 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BUNTA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/030">BUNTA</a>
                                                </td>

                                                <td class="text-right" data-col="4">
                                                    197.341.089
                                                </td>

                                                <td class="text-right" data-col="4">
                                                    66.350.840
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    33,62 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="TOILI JAYA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/013">TOILI JAYA</a>
                                                </td>

                                                <td class="text-right" data-col="5">
                                                    255.569.473
                                                </td>

                                                <td class="text-right" data-col="5">
                                                    187.372.751
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    73,32 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK UTARA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/052">LUWUK UTARA</a>
                                                </td>

                                                <td class="text-right" data-col="6">
                                                    808.928.031
                                                </td>

                                                <td class="text-right" data-col="6">
                                                    199.691.399
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    24,69 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="NUHON">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/031">NUHON</a>
                                                </td>

                                                <td class="text-right" data-col="7">
                                                    225.302.445
                                                </td>

                                                <td class="text-right" data-col="7">
                                                    91.199.619
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    40,48 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="TOILI">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/010">TOILI</a>
                                                </td>

                                                <td class="text-right" data-col="8">
                                                    353.627.970
                                                </td>

                                                <td class="text-right" data-col="8">
                                                    248.845.521
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    70,37 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="NAMBO">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/054">NAMBO</a>
                                                </td>

                                                <td class="text-right" data-col="9">
                                                    196.075.649
                                                </td>

                                                <td class="text-right" data-col="9">
                                                    119.330.215
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    60,86 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/080">BALANTAK</a>
                                                </td>

                                                <td class="text-right" data-col="10">
                                                    75.345.354
                                                </td>

                                                <td class="text-right" data-col="10">
                                                    25.518.870
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    33,87 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="MOILONG">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/012">MOILONG</a>
                                                </td>

                                                <td class="text-right" data-col="11">
                                                    334.323.909
                                                </td>

                                                <td class="text-right" data-col="11">
                                                    164.925.122
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    49,33 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="LAMALA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/070">LAMALA</a>
                                                </td>

                                                <td class="text-right" data-col="12">
                                                    181.064.894
                                                </td>

                                                <td class="text-right" data-col="12">
                                                    113.348.811
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    62,60 %
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
                                            <tr class="border-spa" data-row="SIMPANG RAYA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/032">SIMPANG RAYA</a>
                                                </td>

                                                <td class="text-right" data-col="14">
                                                    123.963.605
                                                </td>

                                                <td class="text-right" data-col="14">
                                                    26.712.285
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    21,55 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/081">BALANTAK SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="15">
                                                    87.935.206
                                                </td>

                                                <td class="text-right" data-col="15">
                                                    29.279.371
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    33,30 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="KINTOM">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/040">KINTOM</a>
                                                </td>

                                                <td class="text-right" data-col="16">
                                                    247.532.822
                                                </td>

                                                <td class="text-right" data-col="16">
                                                    70.034.049
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    28,29 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="MANTOH">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/072">MANTOH</a>
                                                </td>

                                                <td class="text-right" data-col="17">
                                                    150.563.938
                                                </td>

                                                <td class="text-right" data-col="17">
                                                    57.095.876
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    37,92 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="TOILI BARAT">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/011">TOILI BARAT</a>
                                                </td>

                                                <td class="text-right" data-col="18">
                                                    410.903.634
                                                </td>

                                                <td class="text-right" data-col="18">
                                                    293.309.020
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    71,38 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK UTARA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/082">BALANTAK UTARA</a>
                                                </td>

                                                <td class="text-right" data-col="19">
                                                    73.542.631
                                                </td>

                                                <td class="text-right" data-col="19">
                                                    17.614.946
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    23,95 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="PAGIMANA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/060">PAGIMANA</a>
                                                </td>

                                                <td class="text-right" data-col="20">
                                                    292.402.759
                                                </td>

                                                <td class="text-right" data-col="20">
                                                    57.956.825
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    19,82 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK TIMUR">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/051">LUWUK TIMUR</a>
                                                </td>

                                                <td class="text-right" data-col="21">
                                                    476.388.904
                                                </td>

                                                <td class="text-right" data-col="21">
                                                    132.328.823
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    27,78 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="BATUI SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/021">BATUI SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="22">
                                                    218.181.755
                                                </td>

                                                <td class="text-right" data-col="22">
                                                    104.408.243
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    47,85 %
                                                </td>

                                            </tr>
                                            <tr class="border-spa" data-row="LOBU">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/targetPbbKelurahan/062">LOBU</a>
                                                </td>

                                                <td class="text-right" data-col="23">
                                                    33.064.699
                                                </td>

                                                <td class="text-right" data-col="23">
                                                    6.894.982
                                                </td>

                                                <td class="text-right" data-col="progress">
                                                    20,85 %
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
                                                        <span class="absolute text-xl xxl:text-2xl top-0 left-0 -mt-1 xxl:mt-0">Rp.</span><span class="total-penerimaan">3.459.167.318</span>
                                                    </div>
                                                </div>
                                                <div class="mt-5 xxl:flex xxl:justify-center xxl:mt-0 xxl:-ml-20 xxl:w-14 xxl:flex-none xxl:pl-2.5">
                                                    <div class="font-medium inline-flex bg-theme-10 text-white rounded px-2 py-1 text-2xl xxl:text-3xl xxl:p-0 xxl:text-theme-10 xxl:bg-transparent xxl:flex items-center tooltip cursor-pointer xxl:justify-center">
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
                </div>

                <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl: mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div class="col-span-12 mt-2">
                                <div class="intro-y block sm:flex items-center h-10 mt-5">
                                    <h2 class="text-lg font-medium truncate mr-5">Penerimaan Pajak PBB Per Kecamatan</h2>
                                </div>
                                <div id="table-penerimaan-kecamatan-perbulan" class="intro-y overflow-auto mt-8 sm:mt-0">
                                    <table class="table table-report table-report--small sm:mt-0">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">KECAMATAN</th>
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
                                                <th class="text-center whitespace-nowrap">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            <tr class="border-spa" data-row="BATUI">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/020">BATUI</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    856.814
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    1.906.283
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    43.280.612
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    42.415.494
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    67.009.120
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    18.393.263
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    7.998.594
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
                                                <td>
                                                    181.860.180
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/053">LUWUK SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    13.265.131
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    32.643.427
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    186.419.378
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    64.819.144
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    63.510.288
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    86.039.849
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    65.115.911
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
                                                <td>
                                                    511.813.128
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/050">LUWUK</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    2.295.529
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    61.487.201
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    121.052.053
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    121.865.271
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    75.334.626
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    74.186.981
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    36.059.978
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
                                                <td>
                                                    492.281.639
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="MASAMA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/071">MASAMA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    2.693.076
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    4.806.705
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    28.209.497
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    44.690.059
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    85.895.465
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    29.560.509
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
                                                <td>
                                                    195.855.311
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BUNTA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/030">BUNTA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    60.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    6.154.442
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    367.660
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    22.013.566
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    1.457.431
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    27.151.566
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    9.146.175
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
                                                <td>
                                                    66.350.840
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="TOILI JAYA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/013">TOILI JAYA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    365.195
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    8.263.883
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    50.572.832
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    57.027.568
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    57.472.604
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    13.670.669
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
                                                <td>
                                                    187.372.751
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK UTARA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/052">LUWUK UTARA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    677.094
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    8.629.067
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    79.991.636
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    35.075.241
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    21.646.773
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    28.319.038
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    25.352.550
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
                                                <td>
                                                    199.691.399
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="NUHON">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/031">NUHON</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    79.900
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    577.335
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    57.561.471
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    11.079.994
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    21.780.919
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    120.000
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
                                                <td>
                                                    91.199.619
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="TOILI">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/010">TOILI</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    104.224
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    1.647.698
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    62.423.426
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    72.000.523
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    63.718.189
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    35.417.543
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    13.533.918
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
                                                <td>
                                                    248.845.521
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="NAMBO">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/054">NAMBO</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    392.774
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    1.516.034
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    4.666.868
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    46.210.635
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    35.743.765
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    20.811.927
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    9.988.212
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
                                                <td>
                                                    119.330.215
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/080">BALANTAK</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    20.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    46.392
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    192.078
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    40.061
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    13.598.609
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    11.621.730
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
                                                <td>
                                                    25.518.870
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="MOILONG">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/012">MOILONG</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    40.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    658.038
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    10.185.380
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    15.469.222
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    85.936.234
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    52.243.861
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    392.387
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
                                                <td>
                                                    164.925.122
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LAMALA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/070">LAMALA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    2.263.656
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    48.548.921
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    6.451.057
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    23.783.864
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    13.529.619
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    18.771.694
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
                                                <td>
                                                    113.348.811
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BUALEMO">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/061">BUALEMO</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    80.000
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    1.151.575
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    10.681.269
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    18.837.251
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    18.543.332
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    15.846.065
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
                                                <td>
                                                    65.139.492
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="SIMPANG RAYA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/032">SIMPANG RAYA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    104.226
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    60.000
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    318.726
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    474.590
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    20.000
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    25.734.743
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
                                                <td>
                                                    26.712.285
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/081">BALANTAK SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    20.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    40.000
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    11.855.876
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    13.258.453
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    4.105.042
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
                                                <td>
                                                    29.279.371
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="KINTOM">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/040">KINTOM</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    440.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    14.549.123
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    5.816.181
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    21.870.456
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    15.109.150
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    6.056.897
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    6.192.242
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
                                                <td>
                                                    70.034.049
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="MANTOH">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/072">MANTOH</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    240.000
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    11.388.563
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    10.357.602
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    13.228.957
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    14.442.436
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    7.438.318
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
                                                <td>
                                                    57.095.876
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="TOILI BARAT">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/011">TOILI BARAT</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    24.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    2.262.035
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    113.174.591
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    112.918.688
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    26.694.690
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    37.496.488
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    738.528
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
                                                <td>
                                                    293.309.020
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BALANTAK UTARA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/082">BALANTAK UTARA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    368.094
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    160.000
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    40.000
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    153.620
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    16.813.232
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    80.000
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
                                                <td>
                                                    17.614.946
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="PAGIMANA">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/060">PAGIMANA</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    67.414
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    878.903
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    4.739.879
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    13.792.998
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    18.308.561
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    12.192.768
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    7.976.302
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
                                                <td>
                                                    57.956.825
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LUWUK TIMUR">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/051">LUWUK TIMUR</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    71.504
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    1.426.006
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    4.546.797
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    3.481.286
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    20.228.954
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    69.313.397
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    33.260.879
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
                                                <td>
                                                    132.328.823
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="BATUI SELATAN">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/021">BATUI SELATAN</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    20.000
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    595.856
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    6.844.116
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    5.889.334
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    37.115.636
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    45.600.825
                                                </td>
                                                <td class="text-right" data-col="6">
                                                    8.342.476
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
                                                <td>
                                                    104.408.243
                                                </td>
                                            </tr>
                                            <tr class="border-spa" data-row="LOBU">
                                                <td class="whitespace-nowrap">
                                                    <a class="a-kecamatan" href="pajak/pbbKelurahan/062">LOBU</a>
                                                </td>

                                                <td class="text-right" data-col="0">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="1">
                                                    0
                                                </td>
                                                <td class="text-right" data-col="2">
                                                    100.000
                                                </td>
                                                <td class="text-right" data-col="3">
                                                    20.000
                                                </td>
                                                <td class="text-right" data-col="4">
                                                    154.000
                                                </td>
                                                <td class="text-right" data-col="5">
                                                    6.620.982
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
                                                <td>
                                                    6.894.982
                                                </td>
                                            </tr>
                                            <tr data-row="total">
                                                <td><strong>Total</strong></td>

                                                <td class="text-right bg-gray-500" data-col="0">
                                                    <strong>18.458.710</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="1">
                                                    <strong>140.550.426</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="2">
                                                    <strong>719.056.363</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="3">
                                                    <strong>754.086.113</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="4">
                                                    <strong>727.645.792</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="5">
                                                    <strong>785.679.465</strong>
                                                </td>
                                                <td class="text-right bg-gray-500" data-col="6">
                                                    <strong>313.690.449</strong>
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

                                                <td>
                                                    <strong>3.459.167.318</strong>
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
        const ele = document.getElementById('table-penerimaan-per-kecamatan');
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
        const ele = document.getElementById('table-penerimaan-kecamatan-perbulan');
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