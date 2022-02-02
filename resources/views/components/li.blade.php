<li>
    <a href="{{ route($route) }}"
       class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group {{-- bg-gray-100 --}}">
        <i class="{{ $icon }} w-5 h-5 text-gray-500 group-hover:text-gray-900 transition duration-75"></i>
        <span class="ml-3 flex-1 whitespace-nowrap" sidebar-toggle-item>{{ $name }}</span>
    </a>
</li>
