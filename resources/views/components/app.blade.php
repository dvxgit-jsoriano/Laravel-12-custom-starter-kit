<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Default Application Name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>
    <div class="flex h-screen bg-gray-100">

        <!-- sidebar -->
        <div id="sidebar" class="hidden md:flex flex-col w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <span class="text-white font-bold uppercase">{{ env('APP_NAME', 'Default Application Name') }}</span>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <span class="h-6 w-6 mr-2"><i class="fa-solid fa-chart-line"></i></span>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('admin.users') }}"
                        class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <span class="h-6 w-6 mr-2"><i class="fa-solid fa-users"></i></span>
                        <span>Users</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <span class="h-6 w-6 mr-2"><i class="fa-solid fa-clone"></i></span>
                        <span>Templates</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <span class="h-6 w-6 mr-2"><i class="fa-solid fa-file-import"></i></span>
                        <span>Pages</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between py-4 bg-white border-b border-gray-200">
                <div class="flex items-center px-4">
                    <button onclick="toggleSidebar()"
                        class="cursor-pointer text-gray-500 focus:outline-none focus:text-gray-700">
                        <span class="h-6 w-6"><i class="fa-solid fa-bars"></i></span>
                    </button>
                </div>
                <div class="flex items-center pr-4">
                    {{-- <button
                        class="cursor-pointer flex items-center text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                        <span class="h-6 w-6"><i class="fa-solid fa-user"></i></span>
                    </button> --}}

                    <div class="relative inline-block text-left">
                        <button id="dropdownButton" type="button"
                            class="cursor-pointer inline-flex justify-center text-gray-700 focus:outline-none">
                            <span class="h-6 w-6"><i class="fa-solid fa-user"></i></span>
                        </button>

                        <div id="dropdownMenu"
                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-gray-300 ring-opacity-5 hidden z-50">
                            <div class="py-1" role="menu" aria-orientation="vertical"
                                aria-labelledby="options-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
                                    role="menuitem">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
                                    role="menuitem">Messages</a>
                                <hr class="border-gray-300 my-1">
                                <a href="{{ route('custom.login') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
                                    role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="p-4">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            $("#sidebar").toggle();
        }

        $('#dropdownButton').on('click', function(e) {
            e.stopPropagation();
            $('#dropdownMenu').toggleClass('hidden');
        });

        // Close dropdown when clicking outside
        $(document).on('click', function() {
            $('#dropdownMenu').addClass('hidden');
        });
    </script>
</body>

</html>
