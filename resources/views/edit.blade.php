<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="{{url('/index')}}">
        @csrf
        <livewire:Inputs label="Tugas" name="tugas" placeholder="Isi Tugas "/>
        <livewire:Inputs type="date" label="Tanggal" name="tanggal" placeholder="Isi Tanggal "/>
        <livewire:Inputs label="PIC" name="pic" placeholder="Isi Nama "/>
        <livewire:Inputs label="Status" name="status" placeholder="Isi Status Pekerjaan "/>
        <livewire:Button name="Simpan"/>
    </form>
</body>
</html>
