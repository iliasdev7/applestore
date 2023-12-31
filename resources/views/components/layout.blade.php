<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('vendor/livewire/livewire.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>  
</head>
<body>
    <x-navbar />
    {{$slot}}
    <x-footer />


    @livewireScripts 
 </body>
</html>