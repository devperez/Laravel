<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello City</title>
</head>

<body>
    <h1>Bonjour de Montcuq !</h1>

    <p>Il est exactement {{date('H:i')}}.</p>
    <footer>&copy; Copyright {{date('Y')}} &middot; <a href='#'>À propos</a>
</body>

</html>