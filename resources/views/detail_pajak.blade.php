@extends('layouts.app') {{-- ganti dengan layout yang kamu gunakan --}}

@section('content')
    <div class="intro-y box p-5 mt-5">
        <h2 class="text-lg font-medium mb-4">
            Daftar Wajib Pajak - {{ ucfirst(str_replace('_', ' ', $status)) }}
        </h2>

        <div class="overflow-x-auto">
            <table class="table table-report table-report--bordered table-report--hover">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">NOP</th>
                        <th class="whitespace-nowrap">Nama Wajib Pajak</th>
                        <th class="whitespace-nowrap">Alamat</th>
                        <th class="text-right whitespace-nowrap">Tagihan (Rp)</th>
                        <th class="text-right whitespace-nowrap">Total Bayar (Rp)</th>
                        <th class="text-right whitespace-nowrap">Denda (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($wajibPajak as $wp)
                        <tr>
                            <td class="whitespace-nowrap font-mono">{{ $wp->nop }}</td>
                            <td class="whitespace-nowrap">{{ $wp->nama_wp }}</td>
                            <td class="whitespace-nowrap">{{ $wp->alamat_wp }}</td>
                            <td class="text-right">{{ number_format($wp->yg_harus_byr, 0, ',', '.') }}</td>
                            <td class="text-right">{{ number_format($wp->total_bayar, 0, ',', '.') }}</td>
                            <td class="text-right">{{ number_format($wp->total_denda, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data wajib pajak.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">← Kembali</a>
        </div>
    </div>
@endsection
