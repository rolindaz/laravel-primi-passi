<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href={{ route("home") }}>
                Homepage
                </a>
            </li>
            <li>
                <a href={{ route("profile") }}>
                Profilo
            </a>
            </li>
            <li>
                <a href={{ route("cart") }}>
                Carrello
                </a>
            </li>
        </ul>
    </nav>
    <h1>Welcome to the Carrello Page</h1>
    <p>
        @php
            $saluto = "Ciao a tutti!";
        @endphp
        {{ $saluto }}
        {{ $cart_info }}
    </p>
</body>
</html>