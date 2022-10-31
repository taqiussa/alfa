<aside
    class="absolute lg:relative z-10 w-60 transform inset-0 min-h-screen duration-700 bg-white border-r-2 border-emerald-700 p-3"
    :class="{ 'translate-x-0 ease-in': isOpen === true, '-translate-x-[120%] lg:translate-x-0 ease-out': isOpen === false }">
    <h1 class="py-3 text-xl">
        {{ auth()->user()->name }}
    </h1>
    <div class="px-4 space-y-2">
        {{-- sidebar toggel --}}
        <button @click="isOpen = !isOpen"
            class="absolute p-1 bg-white border-2 rounded-full shadow-md sm:block focus:outline-none active:bg-emerald-400 -right-5 top-10 border-emerald-700 hover:bg-emerald-200">
            <svg x-bind:class="isOpen ? 'rotate-90' : '-rotate-90'" class="w-4 h-4 transition-all duration-1000 transform"
                style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>
        </button>

        {{-- Guru --}}
        <x-sidebar.sidebar-guru />
        
        <hr />
        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="relative flex items-center p-2 space-x-2 rounded-md cursor-pointer hover:bg-emerald-400 bg-emerald-200 border border-emerald-700">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z" />
                </svg>
                <button type="submit">Logout</button>
            </div>
        </form>
    </div>
</aside>
