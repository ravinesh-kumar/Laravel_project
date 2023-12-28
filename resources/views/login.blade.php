<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="logincode" method="post">
        @csrf
        Enter Email / Username<input type="text" name="em" id=""> <br>
        Enter Password<input type="password" name="pass" id=""><br>
        <button>Login</button>
    </form>
    <p><a href="{{'form'}}">registration</a> </p>
</body>
</html>