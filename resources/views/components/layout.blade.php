<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title>Document</title>
</head>
<body class="h-full">
<div class="min-h-full">

    <x-navbar />

    <x-header :title=$title />

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
            <div class="flex mt-3">
                <div class="w-8 h-8 bg-teal-500 text-white p-0 m-1 text-xs grid place-items-center">1</div>
            </div>
        </div>
    </main>

</div>

</body>
</html>