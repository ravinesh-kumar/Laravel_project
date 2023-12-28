<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="../fileupdate" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        Name <input type="text" name="name" value="{{$data->name}}"><br>
        Email <input type="email" name="email" value="{{$data->email}}"><br>
        Password <input type="password" name="pass" value="{{$data->pass}}"><br>
        Gender <input type="radio" name="gnd" value="Male" {{$data->gender=='Male'?"checked":"" }} >Male
        <input type="radio" name="gnd" value="Female" {{$data->gender=='Female'?"checked":"" }} >Female
        <br>
        @php
        $hob=explode(',',$data->course);
        @endphp
        Course <input type="checkbox" name="chk[]" value="c"  {{in_array('c',$hob)?"checked":"" }} >C
         <input type="checkbox" name="chk[]" value="c++"  {{in_array('c++',$hob)?"checked":"" }} >C++ 
         <input type="checkbox" name="chk[]" value="php"  {{in_array('php',$hob)?"checked":"" }} >PHP 
         <br>
         City <select name="city" id="">
            <option {{$data->city=='Lucknow'?"selected":""}}>Lucknow</option>
            <option {{$data->city=='Delhi'?"selected":""}}>Delhi</option>
         </select>
         <br>
         <img src="{{asset('picture/',$data->file)}}" height="100px" width="100px" >
        File <input type="file" name="files" ><br>
        <button>Update</button>


    </form>
</body>
</html>