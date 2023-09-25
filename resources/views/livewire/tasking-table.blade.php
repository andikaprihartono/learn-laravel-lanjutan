<div>
        <table>
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Tugas</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">PIC</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($data_tasking as $tasking)
                <tr>
                    <td>{{ $tasking->tugas }}</td>
                    <td>{{ $tasking->tanggal }}</td>
                    <td>{{ $tasking->pic }}</td>
                    <td>{{ $tasking->status }}</td>
                    <td>
                        <form action="{{ url('/tasking/delete', $tasking->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <x-button><a href="{{ url('/tasking/edit', $tasking->id) }}">Edit</a></x-button>
                            @method('delete')
                            <x-button onclick="return confirm('yakin mau hapus?')">Delete</x-button>
                        </form>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>

        <tbody class="bg-white divide-y divide-gray-200">

        </tbody>


</div>

