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
            <th>Gender</th>
            <th>Course</th>
            <th>City</th>
            <th>File</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $x)
        <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
            <td>{{$x->email}}</td>
            <td>{{$x->pass}}</td>
            <td>{{$x->gender}}</td>
            <td>{{$x->course}}</td>
            <td>{{$x->city}}</td>
            <td><img src="{{asset('picture/'.$x->file)}}" height="100px" width="100px" alt=""></td>

            <td><a href="{{'fedit/'.$x->id}}">Edit Data</a></td>
        </tr>
        @endforeach
    </table>

    <form action="searchcode" method="post">
        @csrf
        <input type="text" name="search" id=""><br>
        <button>Search</button>
    </form>


</body>
</html>