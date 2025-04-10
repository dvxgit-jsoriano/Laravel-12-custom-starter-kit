<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="container mx-auto p-4 mt-12 bg-white flex flex-col items-center justify-center text-gray-700">
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
            <h1 class="text-4xl font-semibold">Admin Login</h1>
        </div>
        <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
            <input
                class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                type="text" placeholder="Email" />
            <input
                class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                type="text" placeholder="Password" />
            <div class="flex items-center">
                <div class="w-1/2 flex items-center">
                    <input id="remember-me" type="checkbox" class="mt-1 mr-2" />
                    <label for="remember-me">Remember me!</label>
                </div>
                <div
                    class="ml-auto w-1/2 bg-gray-800 text-white text-center p-2 rounded font-semibold hover:bg-gray-900">
                    <form action="{{ route('admin.dashboard') }}">
                        <button class="cursor-pointer" type="submit">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
