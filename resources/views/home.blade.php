<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('info')}}">Info</a></li>
                <li><a href="{{ route('contacts')}}">Contact</a></li>
            </ul>
        </nav>
    </header>
    <h1> {{ $title }} </h1>

    <h2> {{ $subtitle }} </h2>
    <p>questa è la pagina principale</p>
</body>
</html>