<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'ciao' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <x-navbar />
    {{-- <x-navbar></x-navbar> --}}
    {{-- !inserisci il contenuto una pagina in maniera dinamica 
        slot vuol dire posizione/inserimento 
        è un segnaposto
        --}}
    {{ $slot }}



</body>

</html>
