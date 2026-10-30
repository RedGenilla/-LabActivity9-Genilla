@extends('layouts.app')
@section('title', 'Sign in')
@section('content')
<div class="max-w-md mx-auto mt-8">
    <div class="bg-white rounded-xl shadow-sm border p-8">
        <h1 class="text-2xl font-bold text-emerald-800 mb-2">
            Health Worker Login
        </h1>

        <p class="text-slate-500 text-sm mb-6">
            Sign in to access vaccination records.
        </p>

        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium mb-1">
                    Email Address
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                >

                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-1">
                    Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                >

                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-semibold rounded-lg p-3">
                Sign in
            </button>
        </form>
    </div>
</div>
@endsection


