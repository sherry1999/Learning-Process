@extends('layouts.app')
<link rel="stylesheet" href="css/student-style.css">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

                  @foreach($courses as $x)
                   {{$x->name}} ---- {{$x->duration}} <br>
                  @endforeach

</body>
</html>