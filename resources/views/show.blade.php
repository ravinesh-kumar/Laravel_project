<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Show Page</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach($data as $x)
        <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
            <td>{{$x->email}}</td>
            <td>{{$x->pass}}</td>
            <td><a href="{{'delete/'.$x->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>