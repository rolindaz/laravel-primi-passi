<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
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
    <h1>Welcome to the Profilo Page</h1>
    <p>
        {{ $profile_info }}
    </p>
</body>
</html>