<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>caPOS | {{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    ::-webkit-scrollbar {
    width: 5px;
    border-radius: 1rem;

    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #1E2541;
    border-radius: 1rem;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #F0719C;
    border-radius: 1rem;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #FFA46B ;
    }
</style>
</head>
<body class="font-body bg-primary flex w-full">

    <sidebar class="flex h-screen w-32 bg-sidebar rounded-r-3xl flex-col justify-between p-10"> @yield('sidebar') </sidebar>
    <content class="w-full h-screen overflow-auto px-16"> @yield('content') </content>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>