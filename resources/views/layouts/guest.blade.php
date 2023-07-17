<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/countup.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="spin-wrapper" id="spin">
        <div class="grid min-h-screen place-content-center">
            <div class="flex items-center gap-2 text-gray-500">
                <!-- <span class="h-6 w-6 block rounded-full border-4 border-t-blue-300 animate-spin"></span>
                loading... -->
                <img src="/images/logotype.png" class="animate-bounce duration-2000">
            </div>
        </div>
    </div>
    <div class="font-sans antialiased body-wrapper" style="display:none" id="slot">
        @if(View::exists('debug.responsive')) @include('debug.responsive') @endif
        {{ $slot }}
    </div>
    <script>
        $(window).on('load', function() {
            $('.spin-wrapper').fadeOut();
            $('.body-wrapper').fadeIn();
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>