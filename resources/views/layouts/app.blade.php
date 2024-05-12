<!DOCTYPE html  >
<html lang="en"  >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>ToDo</title>
     {{-- blade-formatter-disable --}}
    <style>
        .btn{
            @apply underline bg-red-300
        }
        .line{
            @apply font-bold text-2xl text-center underline decoration-pink-300 underline-offset-8
        }
        </style>
    {{-- blade-formatter-enable --}}
</head>
<body class="container mt-10 mx-auto max-w-lg">
    <h1 class="font-bold text-2xl w-full text-center underline decoration-pink-300 underline-offset-8 mb-4">
        @yield('title')
    </h1>
    <div x-data="{flash : true}" class="my-4 text-green-400 underline underline-offset-8 mb-3 font-bold" >
        @if (session()->has('success'))
            <div x-show="flash" class="flex relative">
                {{ session('success') }}
                <span class="absolute  top-0 bottom-0 right-0 ">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" @click="flash = false">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                      </svg>
                      
                </span>
            </div>
        @endif
    </div>
    @yield('content')
</body>
</html>