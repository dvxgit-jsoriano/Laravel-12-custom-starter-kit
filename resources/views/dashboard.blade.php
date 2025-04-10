<x-app>
    <h1 class="text-2xl font-bold">Welcome to my dashboard!</h1>
    <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p>

    <div class="mt-2 inline-flex items-center gap-2">
        <input type="checkbox" name="is-online" id="is-online" value="Enable Online" checked> Enable Online
        <button onclick="save()"
            class="rounded border shadow px-2 py-1 border-green-400 bg-green-500 text-green-50 hover:bg-green-400 cursor-pointer">Save</button>
        <a href="{{ route('root') }}" target='_blank'
            class="rounded border shadow px-2 py-1 border-yellow-900 bg-yellow-500 text-yellow-900 hover:bg-yellow-400 cursor-pointer">View
            Start Page</a>
    </div>

    <div>
        <ul>
            @foreach ($settings as $setting)
                <li>{{ $setting->is_online }}</li>
            @endforeach
        </ul>
    </div>

    <script>
        function save() {
            $.ajax({
                url: '{{ route('admin.save-setting') }}', // adjust the route if needed
                method: 'POST',
                data: {
                    is_online: $('#is-online').is(':checked') ? 1 : 0,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Saved!', response);
                    alert(response.message);
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseJSON);
                    alert('Something went wrong: ' + xhr.responseJSON.message);
                }
            });
        }
    </script>
</x-app>
