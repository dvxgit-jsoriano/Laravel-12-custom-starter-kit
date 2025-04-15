<x-app>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Users List</h2>
        <div class="inline">
            <a href="{{ route('admin.users-add') }}"
                class="rounded border shadow px-2 py-1 border-green-400 bg-green-500 text-green-50 hover:bg-green-400 cursor-pointer">Create</a>
        </div>
    </div>

    @if (session('success'))
        <div class="mx-auto my-4">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">User: Successful</p>
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="mx-auto my-4">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">User: Failed</p>
                <p>{{ session('error') }}</p>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="mx-auto my-4">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg">
                <p class="text-lg font-semibold">User: Failed</p>
                <ul class="text-sm italic">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Table Content -->
    <div class="border border-gray-200 rounded-lg shadow-sm overflow-x-auto max-h-[500px]">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 font-bold text-gray-800">#</th>
                    <th class="px-4 py-2 font-bold text-gray-800">Name</th>
                    <th class="px-4 py-2 font-bold text-gray-800">Email</th>
                    <th class="px-4 py-2 font-bold text-gray-800">Role</th>
                    <th class="px-4 py-2 font-bold text-gray-800">Status</th>
                    <th class="px-4 py-2 font-bold text-gray-800 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">

                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $user->id }}</td>
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2">Admin</td>
                        <td class="px-4 py-2">
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2 flex flex-row items-center justify-center">
                            <a href="{{ route('admin.users-edit', $user) }}"
                                class="text-orange-600 bg-orange-50 hover:text-orange-500 font-medium cursor-pointer border border-orange-300 px-1 rounded"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.users-destroy', $user) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 bg-red-50 hover:text-red-500 font-medium cursor-pointer border border-red-300 px-1 rounded"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4">{{ $users->links() }}</div>
    </div>
</x-app>
