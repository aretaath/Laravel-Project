<div x-data="{ open: false }" class="relative">
    <!-- Button for both Desktop and Mobile -->
    <button @click="open = !open"
        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md
               block w-full text-left md:w-auto md:text-center
               px-4 py-3 text-base font-medium md:px-3 md:py-2 md:text-sm">
        {{ $title }}
    </button>

    <!-- Dropdown menu for desktop -->
    <div x-show="open" @click.away="open = false"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-10 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none md:block hidden">
        {{ $slot }}
    </div>

    <!-- Dropdown menu for mobile -->
    <div x-show="open" class="md:hidden block px-2 pt-2 pb-3 space-y-1">
        {{ $slot }}
    </div>
</div>
