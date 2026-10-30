
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <nav class="bg-emerald-700 text-white">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="/dashboard" class="font-bold text-xl">
                Bakuna Tracker
            </a>

            <div class="flex flex-wrap items-center gap-4 text-sm">
                @auth
                    <a href="/dashboard" class="hover:underline">Dashboard</a>
                    <a href="/schedule" class="hover:underline">Schedule</a>

                    <span>Hi, {{ auth()->user()->name }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-white text-emerald-700 px-3 py-2 rounded-lg font-medium">
                            Logout
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="hover:underline">
                        Sign in
                    </a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto w-full px-4 py-8 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-slate-800 text-white text-center py-4 text-sm">
        <p>Barangay Bakuna Tracker - Purok Genilla</p>
        <p>Matina Crossing Health Center, Davao City</p>
    </footer>

</body>
</html>

