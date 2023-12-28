<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Page</h1>
    <form action="formcode" method="post">
        @csrf  
        <!-- for form secure submission  -->
        Name <input type="text" name="name"><br>
        Mobile <input type="number" name="mob"><br>
        <button>Submit</button>
    </form>
</body>
</html>