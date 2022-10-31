<div>
    {{-- Title --}}
    <h1 class="text-2xl font-bold rounded-lg bg-emerald-200 text-center border border-emerald-700 my-2">Guru</h1>
    {{-- Home --}}
    <a href="{{ route('dashboard') }}" class="relative flex items-center p-2 space-x-2 rounded-md cursor-pointer hover:bg-emerald-400 my-2 {{ Request::routeIs('dashboard') ? 'bg-emerald-400' : '' }}">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22" />
        </svg>
        <h1>Dashboard</h1>
    </a>

    {{-- Audience --}}
    <x-sidebar.dropdown-header >
        <x-slot name="header">
            Audience
        </x-slot>
    </x-sidebar.dropdown-header>

    {{-- Audience --}}
</div>
