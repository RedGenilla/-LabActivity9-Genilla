@props(['title'])

<section class="bg-white border rounded-xl shadow-sm overflow-hidden">
    <div class="border-b px-5 py-4">
        <h2 class="font-bold text-lg text-slate-800">
            {{ $title }}
        </h2>
    </div>

    <div class="p-5">
        {{ $slot }}
    </div>
</section>
