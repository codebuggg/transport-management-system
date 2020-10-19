<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

          <style>
              .primary-text-color{
               color:#07223f
              }
              .primary-background-color{
                  background-color: #07223f;
              }
              .secondary-text-color{
               color:#0ec362
              }
              .secondary-background-color{
                  background-color: #0ec362;
              }
          </style>
</head>
<body class="bg-gray-200">
    <nav class="primary-background-color">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
                <!-- Icon when menu is closed. -->
                <!--
                Heroicon name: menu

                Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon when menu is open. -->
                <!--
                Heroicon name: x

                Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0">
                    <img class="block lg:hidden h-16 w-auto" src="{{asset('asset/images/logowhite.png')}}" alt="logo">
                    <img class="hidden lg:block h-12 w-auto" src="{{asset('asset/images/logowhite.png')}}" alt="logo">
                </div>

                <div class="hidden sm:block sm:ml-6" >

                    <div class="flex">
                            <a href="{{route('dashboard')}}" class="{{ (request()->is('dashboard')) ? 'primary-text-color bg-gray-200 focus:outline-none ' : '' }} px-3 py-2 rounded-md text-sm font-medium leading-5 text-white focus:outline-none focus:primary-text-color hover:text-gray-700 hover:bg-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</a>
                            <a href="{{route('drivers')}}" class="{{ (request()->is('drivers*')) ? 'primary-text-color bg-gray-200 focus:outline-none' : '' }} px-3 py-2 rounded-md text-sm font-medium leading-5 text-white focus:outline-none focus:primary-text-color hover:text-gray-700 hover:bg-white focus:bg-gray-700 transition duration-150 ease-in-out">Drivers</a>
                            <a href="{{route('sales')}}" class="{{ (request()->is('sales*')) ? 'primary-text-color bg-gray-200 focus:outline-none' : '' }} px-3 py-2 rounded-md text-sm font-medium leading-5 text-white focus:outline-none focus:text-white hover:text-gray-700 hover:bg-white focus:bg-gray-700 transition duration-150 ease-in-out">Sales</a>
                            <a href="{{route('expense')}}" class="{{ (request()->is('expense*')) ? 'primary-text-color bg-gray-200 focus:outline-none ' : '' }} px-3 py-2 rounded-md text-sm font-medium leading-5 text-white focus:outline-none focus:text-white hover:text-gray-700 hover:bg-white focus:bg-gray-700 transition duration-150 ease-in-out">Expense</a>
                            <a href="{{route('messages')}}" class="{{ (request()->is('messages*')) ? 'primary-text-color bg-gray-200 focus:outline-none ' : '' }} px-3 py-2 rounded-md text-sm font-medium leading-5 text-white focus:outline-none focus:text-white hover:text-gray-700 hover:bg-white focus:bg-gray-700 transition duration-150 ease-in-out">Messages</a>

                    </div>

                </div>

            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out" aria-label="Notifications">
                <!-- Heroicon name: bell -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </button>

            <!-- Profile dropdown -->
            <div x-data="{ isOpen: false }" class="ml-3 relative">
                <div>
                    <button @click="isOpen = !isOpen" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out" id="user-menu" aria-label="User menu" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                </div>
                <!--
                Profile dropdown panel, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                <div x-show="isOpen" class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Settings</a>
                    <a href= "{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem">Sign out</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        <!--
        Mobile menu, toggle classes based on menu state.

        Menu open: "block", Menu closed: "hidden"
        -->
        <div class="hidden sm:hidden">
        <div class="px-2 pt-2 pb-3">
            <a href="/dashboard" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</a>
            <a href="/driver" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Drivers</a>
            <a href="/sales" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Sales</a>
            <a href="/messages" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Messages</a>
        </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>

     <!-- AlpineJS -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <!-- Font Awesome -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>


