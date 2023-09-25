<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

    </head>
    <body>
        {{ $slot }}
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:load', function () {
    Livewire.on('showSuccessMessage', function (message) {
        Swal.fire({
            title: 'Sukses!',
            text: message,
            icon: 'success',
     });
    });
});
</script>
    </body>

</html>
