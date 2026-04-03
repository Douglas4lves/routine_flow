<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{config('app.name')}}
    </title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">

    <x-header></x-header>

    <main class="flex-1">
        {{$slot}}
    </main>
    
    
    <x-footer></x-footer>


</body>
</html>