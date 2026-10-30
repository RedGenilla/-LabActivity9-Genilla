
@extends('layouts.app')

@section('title', 'Vaccination Schedule')

@section('content')

<div class="mb-6">
    <h1 class="text-2xl md:text-3xl font-bold text-emerald-800">
        {{ $title }}
    </h1>

    <p class="text-slate-500 mt-2">
        View all vaccination appointments by date.
    </p>
</div>

<x-panel title="All Vaccination Records">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Patient</th>
                    <th class="p-3">Purok</th>
                    <th class="p-3">Vaccine</th>
                    <th class="p-3">Dose</th>
                    <th class="p-3">Date</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($schedules as $schedule)
                    <tr class="{{ $loop->odd ? 'bg-white' : 'bg-slate-50' }} border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $schedule->patient_name }}</td>
                        <td class="p-3">{{ $schedule->purok }}</td>
                        <td class="p-3">{{ $schedule->vaccine }}</td>
                        <td class="p-3">{{ $schedule->dose }}</td>
                        <td class="p-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="p-3">
                            {{ $schedule->status }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-6 text-center text-slate-500">
                            No schedules yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-panel>

<div class="mt-6">
    <a href="/dashboard" class="text-emerald-700 hover:underline font-medium">
        Back to Dashboard
    </a>
</div>

@endsection
