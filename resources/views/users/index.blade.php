@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5 mt-5">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-lg font-medium">Daftar Pengguna</h2>
                                <a href="{{ route('users.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="table table-report table-report--hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td class="whitespace-nowrap">{{ $user->name }}</td>
                                                <td class="whitespace-nowrap">{{ $user->email }}</td>
                                                <td class="whitespace-nowrap capitalize">{{ $user->role }}</td>
                                                <td class="text-center whitespace-nowrap">
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Yakin hapus user ini?')"
                                                            class="btn btn-sm btn-danger ml-2">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                                            </tr>
                                        @endforelse
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
