<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel To Do's</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold text-center">To Do's</h1>
        </div>
    </header>
    <main class="p-4">
        @yield('content')
    </main>
</body>

</html>