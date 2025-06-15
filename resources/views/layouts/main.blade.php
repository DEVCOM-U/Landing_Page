<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- alpine js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center ">
        <main class="max-w-[1440px] ">
            <x-navbar />

            @yield('content')

            <x-footer />
        </main>
    </div>


</body>

</html>
