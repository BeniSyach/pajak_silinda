@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5 mt-5 max-w-xl mx-auto">
                            <h2 class="text-lg font-medium mb-4">Formulir Pendaftaran Wajib Pajak Baru</h2>

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

                            @if ($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('wp.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-4">
                                    <label class="form-label">Nama Wajib Pajak</label>
                                    <input type="text" name="nama_wp" value="{{ old('nama_wp') }}" class="form-control"
                                        required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">NIK (No KTP)</label>
                                    <input type="text" name="no_ktp" value="{{ old('no_ktp') }}" class="form-control"
                                        required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat_wp" class="form-control" required>{{ old('alamat_wp') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">No HP</label>
                                    <input type="text" name="no_hp" value="{{ old('no_hp') }}" class="form-control"
                                        required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Upload Bukti Kepemilikan Tanah</label>
                                    <input type="file" name="bukti_kepemilikan_tanah" class="form-control" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Upload KTP</label>
                                    <input type="file" name="ktp_wp" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
