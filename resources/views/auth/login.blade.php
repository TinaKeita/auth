<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>
    <form  method="POST">
    @csrf
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <label>Email:</label>
        <input type="email" name="email" required/><br><br>

        <label>Password:</label>
        <input type="password" name="password" required/><br><br>

        <button>Login</button>
    </form>
</body>
</html>