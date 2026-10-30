
@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8">
    <h1 class="text-2xl md:text-3xl font-bold text-emerald-800">
        {{ $title }}
    </h1>
    <p class="text-slate-500 mt-2">
        Matina Crossing Health Center vaccination dashboard
    </p>
</div>

<div class="grid gap-4 md:grid-cols-4 mb-8">
    @foreach ($stats as $stat)
        <x-stat-card :title="$stat['label']" :value="$stat['value']" />
    @endforeach
</div>

<div class="mb-8">
    @if ($alerts->count() > 0)
        <div class="bg-red-50 border border-red-200 text-red-800 rounded-lg p-4">
            <p class="font-semibold">
                Vaccination Alert
            </p>
            <p>
                There are {{ $alerts->count() }} overdue vaccination records.
            </p>
        </div>
    
    @elseif ($schedules->contains(function ($schedule) {
        return $schedule->status === 'Scheduled'
            && $schedule->scheduled_at->isToday();
    }))
        <div class="bg-amber-50 border border-amber-200 text-amber-800 rounded-lg p-4">
            There are vaccination appointments scheduled for today.
        </div>
        <div class="bg-amber-50 border border-amber-200 text-amber-800 rounded-lg p-4">
            Vaccine stock requires attention.
        </div>
    @else
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg p-4">
            All clear! No overdue vaccinations.
        </div>
    @endif
</div>

<x-panel title="Vaccination Schedule">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-100 text-slate-700">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Patient</th>
                    <th class="p-3">Purok</th>
                    <th class="p-3">Vaccine</th>
                    <th class="p-3">Dose</th>
                    <th class="p-3">Schedule</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($schedules as $schedule)
                    <tr class="{{ $loop->odd ? 'bg-white' : 'bg-slate-50' }} border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3 font-medium">{{ $schedule->patient_name }}</td>
                        <td class="p-3">{{ $schedule->purok }}</td>
                        <td class="p-3">{{ $schedule->vaccine }}</td>
                        <td class="p-3">{{ $schedule->dose }}</td>
                        <td class="p-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="p-3">
                            <span class="font-medium">{{ $schedule->status }}</span>

                            @unless ($schedule->status !== 'Overdue')
                                <span class="block text-xs text-red-600 font-semibold">
                                    Overdue
                                </span>
                            @endunless
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

    <div class="mt-5">
        <a href="/schedule" class="inline-block bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800">
            View Full Schedule
        </a>
    </div>
</x-panel>

@endsection
