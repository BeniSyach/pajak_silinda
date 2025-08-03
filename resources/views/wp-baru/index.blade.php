@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5 mt-5">
                            <h2 class="text-lg font-medium mb-4">Daftar Pengajuan Wajib Pajak Baru</h2>

                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: '{{ session('success') }}',
                                        confirmButtonText: 'OK'
                                    });
                                </script>
                            @endif


                            <div class="overflow-x-auto">
                                <table class="table table-report table-report--hover">
                                    <thead>
                                        <tr>
                                            <th>Nama WP</th>
                                            <th>No KTP</th>
                                            <th>No HP</th>
                                            <th>Status Penjemputan</th>
                                            <th>Status Validasi</th>
                                            <th>Berkas</th>
                                            @auth
                                                @if (auth()->user()->role === 'admin')
                                                    <th>Aksi</th>
                                                @endif
                                            @endauth
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->nama_wp }}</td>
                                                <td>{{ $item->no_ktp }}</td>
                                                <td>{{ $item->no_hp }}</td>
                                                <td>{{ ucfirst(str_replace('_', ' ', $item->status_penjemputan ?? 'belum_dijemput')) }}
                                                </td>
                                                <td>{{ ucfirst(str_replace('_', ' ', $item->status_validasi ?? 'menunggu')) }}
                                                </td>
                                                <td>
                                                    @if ($item->bukti_kepemilikan_tanah)
                                                        <a href="{{ asset('storage/' . $item->bukti_kepemilikan_tanah) }}"
                                                            target="_blank">Bukti
                                                            Tanah</a>
                                                    @else
                                                        <span class="text-danger">Belum Ada</span>
                                                    @endif
                                                    |
                                                    @if ($item->ktp_wp)
                                                        <a href="{{ asset('storage/' . $item->ktp_wp) }}"
                                                            target="_blank">KTP</a>
                                                    @else
                                                        <span class="text-danger">Belum Ada</span>
                                                    @endif
                                                </td>
                                                @auth
                                                    @if (auth()->user()->role === 'admin')
                                                        <td class="flex space-x-1">
                                                            <a href="{{ route('wp.edit', $item->id) }}"
                                                                class="btn btn-sm btn-primary">Edit</a>

                                                            <form action="{{ route('wp.destroy', $item->id) }}" method="POST"
                                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                                                style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger"
                                                                    type="submit">Hapus</button>
                                                            </form>
                                                        </td>
                                                    @endif
                                                @endauth
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
@endsection
