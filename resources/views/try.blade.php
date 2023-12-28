<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Try Page</h1>
    <form action="trycode" method="post">
        @csrf
       Name <input type="text" name="name"><br>
       Email <input type="email" name="email"><br>
       Password <input type="password" name="pass"><br>
       <button>Submit</button>
    </form>
</body>
</html>