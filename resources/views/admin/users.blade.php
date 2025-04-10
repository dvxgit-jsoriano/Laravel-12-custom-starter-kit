<x-app>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Users List</h2>
        <div class="inline">
            <button
                class="rounded border shadow px-2 py-1 border-green-400 bg-green-500 text-green-50 hover:bg-green-400 cursor-pointer">Create</button>
        </div>
    </div>

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

                @for ($i = 1; $i <= 50; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $i }}</td>
                        <td class="px-4 py-2">User {{ $i }}</td>
                        <td class="px-4 py-2">user{{ $i }}@example.com</td>
                        <td class="px-4 py-2">Admin</td>
                        <td class="px-4 py-2">
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2 text-right">
                            <button
                                class="text-orange-600 bg-orange-50 hover:text-orange-500 font-medium cursor-pointer border border-orange-300 px-1 rounded"><i
                                    class="fa-solid fa-pencil"></i></button>
                            <button
                                class="text-red-600 bg-red-50 hover:text-red-500 font-medium cursor-pointer border border-red-300 px-1 rounded"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-app>
