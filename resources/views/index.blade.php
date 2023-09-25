<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- @vite('resources/css/app.css') --}}
    <title>Foodz</title>
</head>
<body>
    <div>
          <livewire:Button destination="/tasking/create" name="Tambah Task"/>
    </div>
    <form action="{{url('/')}}" method="GET">
            <livewire:Inputs placeholder="Silahkan cari "/>
            <livewire:Button name="Search"/>
    </form>

    <livewire:TaskingTable />
    @foreach ($data_tasking as $tasking)
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
    @endforeach


    </body>
</html>
