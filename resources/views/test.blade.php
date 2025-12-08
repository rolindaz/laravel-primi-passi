<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>
        {{ $test_info }}
    </h1>
</body>
</html>