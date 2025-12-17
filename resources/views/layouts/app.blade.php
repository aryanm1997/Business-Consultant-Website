<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Professional Business Consulting Services">
<title>@yield('title') | Business Consultant</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
</head>
<body class="font-[Montserrat] bg-white text-gray-700">


@include('layouts.nav')


<main class="min-h-screen">
@yield('content')
</main>


@include('layouts.footer')


</body>
</html>