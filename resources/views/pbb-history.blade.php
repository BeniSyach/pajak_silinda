@extends('layouts.app')
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
    <div class="intro-y box p-5 mt-5">
        <h2 class="text-lg font-medium mb-4">Riwayat Pembayaran NOP: {{ $nop }}
        </h2>
        <div class="overflow-x-auto">
            <table class="table table-report table-report--bordered table-report--hover">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Jumlah Terutang</th>
                        <th>Status</th>
                        <th>Jatuh Tempo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($history as $item)
                        <tr>
                            <td>{{ $item->thn_sppt }}</td>
                            <td>{{ number_format($item->yg_harus_byr, 0, ',', '.') }}</td>
                            <td class="p-2 border-b">
                                <span
                                    class="badge 
                                    @if ($item->ket === 'Sudah Bayar') badge-blue 
                                    @elseif ($item->ket === 'Belum Bayar') badge-red 
                                    @elseif ($item->ket === 'Kurang Bayar') badge-yellow 
                                    @else badge-gray @endif">
                                    {{ $item->ket ?? '-' }}
                                </span>
                            </td>

                            <td>{{ $item->tgl_tempo }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center italic text-slate-500">Data tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('pbb.index') }}" class="btn btn-secondary mt-4">← Kembali</a>
        </div>
    </div>
@endsection
