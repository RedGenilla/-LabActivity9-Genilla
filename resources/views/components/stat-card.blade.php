@props(['title', 'value'])

<div class="bg-white border rounded-xl p-5 shadow-sm">
    <p class="text-slate-500 text-sm font-medium">
        {{ $title }}
    </p>

    <p class="text-3xl font-bold text-emerald-700 mt-2">
        {{ $value }}
    </p>
</div>
