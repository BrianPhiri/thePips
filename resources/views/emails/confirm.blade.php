<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation</title>
</head>
<body>
    <h1>WELCOME TO THE PIPS</h1>
    <h2>Thanks for signing up!</h2>

    <p>
        We just need you to <a href='{{ url("register/confirm/{$user->token}") }}'>confirm your email address</a> real quick!
        <br><br>
        <hr>
        <a href='{{ url("register/confirm/{$user->token}") }}'>{{ url("register/confirm/{$user->token}") }}</a>
    </p>
</body>
</html>
