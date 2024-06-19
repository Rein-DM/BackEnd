
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
    @if (session('name'))
            <div class="thank-you-message">
            <a href="{{ url('/register') }}" class="register-button">Go to Register</a>
            </div>
        @endif
    </div>
</body>
</html>
