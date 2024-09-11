<div class="flex flex-col items-center text-center">
    <div class="w-64 aspect-square rounded-lg bg-gray-200 overflow-hidden">
        <img class="h-full w-full object-cover object-center" src="{{ $image }}" alt="{{ $name }}">
    </div>
    <div class="mt-6">
        <h3 class="text-xl font-semibold leading-7 tracking-tight text-gray-900">{{ $name }}</h3>
        <p class="text-base font-semibold leading-6 text-gray-400">{{ $position }}</p>
    </div>
</div>
