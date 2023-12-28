<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="fileuploadcode" method="post" enctype="multipart/form-data">
        @csrf
        Name <input type="text" name="name" id=""><br>
        Email <input type="email" name="email" id=""><br>
        Password <input type="password" name="pass" id=""><br>
        Gender <input type="radio" name="gnd" value="Male">Male
        <input type="radio" name="gnd" value="Female">Female
        <br>
        Course <input type="checkbox" name="chk[]" value="c" id="">C
         <input type="checkbox" name="chk[]" value="c++" id="">C++ 
         <input type="checkbox" name="chk[]" value="php" id="">PHP 
         <br>
         City <select name="city" id="">
            <option >Lucknow</option>
            <option>Delhi</option>
         </select>
         <br>
        File <input type="file" name="files" id=""><br>
        <button>Save</button>


    </form>
</body>
</html>