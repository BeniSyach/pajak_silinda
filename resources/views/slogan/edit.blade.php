@extends('layouts.app')

@section('title', 'Edit Slogan')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 xl:mt-5">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="intro-y box p-5">
                            <h2 class="text-lg font-medium text-green-800 mb-5">Edit Slogan</h2>

                            <form method="POST" action="{{ route('slogan.update', $slogan) }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Isi Slogan</label>
                                    <textarea name="isi" rows="3" class="form-control">{{ old('isi', $slogan->isi) }}</textarea>
                                    @error('isi')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <a href="{{ route('slogan.index') }}" class="btn bg-gray-300 text-black mr-2">Batal</a>
                                    <button type="submit"
                                        class="btn bg-green-600 text-white hover:bg-green-700">Perbarui</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
