<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    {{-- Tailwind CSS v3 CDN --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-400 via-yellow-300 to-yellow-500">

    <div class="w-full max-w-md bg-white bg-opacity-90 backdrop-blur p-8 rounded-2xl shadow-2xl">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Selamat Datang</h2>
            <p class="text-sm text-gray-600 mt-1">Silakan login untuk melanjutkan</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600 bg-red-100 p-2 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-200 shadow">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Belum punya akun? <a href="#" class="text-green-700 hover:underline font-medium">Hubungi Admin</a>
        </p>
    </div>

</body>

</html>
