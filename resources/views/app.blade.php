<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased min-h-screen grid place-items-center bg-blue-900 text-white">
    <canvas id="canvas" class="absolute"></canvas>
    <div class="relative text-center">
        <h1 class="text-blue-500 text-6xl font-bold">Tanks</h1>
        <button type="button" class="bg-orange-500 font-bold rounded-sm px-6 py-2 cursor-pointer mt-10">Host Game</button>
        <p class="mt-6">Room</p>
        <input type="text" class="bg-white px-4 mt-2 h-10 rounded-sm">
    </div>
</body>

<script>
    const canvas = document.getElementById('canvas')
    canvas.width = window.innerWidth
    canvas.height = window.innerHeight
</script>

</html>
