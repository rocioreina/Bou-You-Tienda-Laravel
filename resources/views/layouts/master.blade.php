<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("/css/app.css") }}">

    <title>Bou & You </title>
</head>
<body>
@include('partials.navbar')

<main class="container mx-auto mt-10">
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif
    @yield('content')
</main>
</body>
<script src="https://cdn.tailwindcss.com">
</script>
</html>
