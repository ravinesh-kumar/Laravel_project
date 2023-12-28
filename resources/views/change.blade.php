<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change Password Page</h1>
    <form action="changecode" method="post">
        @csrf
        New Password <input type="text" name="npass" id=""><br>
        Confirm Password <input type="text" name="cpass" id=""><br>
        Old Password <input type="text" name="opass" id=""><br>
        <button>Update</button>
    </form>
</body>
</html>