<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($data as $x)
        <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
            <td>{{$x->mobile}}</td>
            <td><a href="{{'delete/'.$x->id}}">Delete</a></td>
            <td><a href="{{'edit/'.$x->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>