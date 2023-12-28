<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Page</h1>
    <form action="../update" method="post">
        @csrf  
        <input type="hidden" name="id" value="{{$data->id}}">
        <!-- for form secure submission  -->
        Name <input type="text" name="name" value="{{$data->name}}"><br>
        Mobile <input type="number" name="mob"  value="{{$data->mobile}}"><br>
        
        <button>Update</button>
    </form>
</body>
</html>