<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    @if(!session()->exists('user'))
     <script>window.location.href='login';  alert('please login');</script>
    
    @else
        <a href="{{'change'}}">Change Password</a>
        <a href="{{'logout'}}">Logout</a>
    @endif
</body>
</html>