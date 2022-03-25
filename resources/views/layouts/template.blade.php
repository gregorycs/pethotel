<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
    <title>Hotel de mascotas</title>
</head>
<body class="font-sans">
    <div class="flex flex-col h-screen justify-between">
        <header>            
            <div class="h-28 bg-repeat-x bg-center ..." style="background-image: url({{ asset('images/fondo-top.jpg') }})"></div>
        </header>  

        <main class="mb-auto">
            @yield('content')
        </main>

        <footer>
            <div class="container mx-auto px-4">
                <p class="font-sans text-sm md:text-base">© Hotel de mascotas. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>    
</body>
</html>