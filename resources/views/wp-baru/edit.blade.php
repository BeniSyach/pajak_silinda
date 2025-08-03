@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5 mt-5">
                            <h2 class="text-lg font-medium mb-4">Edit Status WP Baru</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('wp.update', $wp->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mt-3">
                                    <label for="status_penjemputan">Status Penjemputan</label>
                                    <select name="status_penjemputan" id="status_penjemputan" class="form-control">
                                        <option value="belum_dijemput"
                                            {{ $wp->status_penjemputan == 'belum_dijemput' ? 'selected' : '' }}>Belum
                                            Dijemput</option>
                                        <option value="sudah_dijemput"
                                            {{ $wp->status_penjemputan == 'sudah_dijemput' ? 'selected' : '' }}>Sudah
                                            Dijemput</option>
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <label for="status_validasi">Status Validasi</label>
                                    <select name="status_validasi" id="status_validasi" class="form-control">
                                        <option value="menunggu" {{ $wp->status_validasi == 'menunggu' ? 'selected' : '' }}>
                                            Menunggu</option>
                                        <option value="valid" {{ $wp->status_validasi == 'valid' ? 'selected' : '' }}>Valid
                                        </option>
                                        <option value="tidak_valid"
                                            {{ $wp->status_validasi == 'tidak_valid' ? 'selected' : '' }}>Tidak Valid
                                        </option>
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('wp.index') }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
