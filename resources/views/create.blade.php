<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Foody</title>
</head>
<body>
    @extends()
    {{-- <form wire:submit="save" >
        @csrf
        <livewire:Inputs wire:model="tugas" label="Tugas" name="tugas" placeholder="Isi Tugas "/>
        <livewire:Inputs wire:model="tanggal" type="date" label="Tanggal" name="tanggal" placeholder="Isi Tanggal "/>
        <livewire:Inputs wire:model="pic" label="PIC" name="pic" placeholder="Isi Nama "/>
        <livewire:Inputs wire:model="status" label="Status" name="status" placeholder="Isi Status Pekerjaan "/>
        <livewire:Button name="Simpan"/>
    </form> --}}
    <livewire:form-create />
</body>
</html>



