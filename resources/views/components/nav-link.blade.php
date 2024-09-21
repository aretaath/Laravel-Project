<<<<<<< HEAD
@props(['active' => false])

=======
>>>>>>> 0e6a8043923a592997e1441b26d73f89cf505de1
<a {{ $attributes }} 
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
           block rounded-md px-4 py-3 text-base font-medium md:inline-flex md:px-3 md:py-2 md:text-sm"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
