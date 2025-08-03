@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5 mt-5">
                            <h2 class="text-lg font-medium mb-4">Tambah Pengguna</h2>

                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="block mb-1">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-1">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-1">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-1">Role</label>
                                    <select name="role" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                </div>

                                <div class="flex gap-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
