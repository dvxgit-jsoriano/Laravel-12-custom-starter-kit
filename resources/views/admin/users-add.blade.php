<x-app>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Users List</h2>
        {{-- <div class="inline">
            <button
                class="rounded border shadow px-2 py-1 border-green-400 bg-green-500 text-green-50 hover:bg-green-400 cursor-pointer">Create</button>
        </div> --}}
    </div>

    @if (session('success'))
        <div class="mx-auto my-4 w-xl">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">Create User: Successful</p>
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="mx-auto my-4 w-xl">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">Create User: Failed</p>
                <p>{{ session('error') }}</p>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="mx-auto my-4 w-xl">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">Create User: Failed</p>
                <ul class="text-sm italic">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="card border border-green-200 rounded-lg shadow-sm mx-auto w-xl">
        <form action="{{ route('admin.users-store') }}" method="POST">
            @csrf
            <div class="card-header bg-green-200 p-2 flex justify-between">
                <div class="font-medium">Create New User</div>
                <div>
                    <a href="{{ route('admin.users') }}"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body p-2 mx-2">
                <!-- username -->
                <div class="flex flex-col mt-2">
                    <label class="py-2 text-sm" for="username">Username:</label>
                    <input class="p-2 w-full border rounded border-gray-200" name="username" type="text"
                        placeholder="Enter username here..." autocomplete="off">
                </div>
                <!-- email -->
                <div class="flex flex-col mt-2">
                    <label class="py-2 text-sm" for="email">Email Address:</label>
                    <input class="p-2 w-full border rounded border-gray-200" name="email" type="text"
                        placeholder="Enter email here..." autocomplete="off">
                </div>
                <!-- full name -->
                <div class="flex flex-col mt-2">
                    <label class="py-2 text-sm" for="fullname">Full Name:</label>
                    <input class="p-2 w-full border rounded border-gray-200" name="fullname" type="text"
                        placeholder="Enter fullname here..." autocomplete="off">
                </div>
                <!-- password -->
                <div class="flex flex-col mt-2">
                    <label class="py-2 text-sm" for="password">Password:</label>
                    <input class="p-2 w-full border rounded border-gray-200" name="password" type="password"
                        placeholder="Enter password">
                </div>
                <!-- confirm -->
                <div class="flex flex-col mt-2">
                    <label class="py-2 text-sm" for="confirm">Confirm Password:</label>
                    <input class="p-2 w-full border rounded border-gray-200" name="confirm" type="password"
                        placeholder="Confirm password">
                </div>
            </div>
            <div class="card-footer flex justify-between p-2">
                <div></div>
                <div>
                    <button
                        class="rounded border shadow px-2 py-1 border-green-400 bg-green-500 text-green-50 hover:bg-green-400 cursor-pointer">Save
                        Changes</button>
                    <button type="button"
                        class="rounded border shadow px-2 py-1 border-gray-400 bg-gray-500 text-gray-50 hover:bg-gray-400 cursor-pointer">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</x-app>
