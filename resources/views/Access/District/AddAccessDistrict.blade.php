<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="main">Trang chủ</a>
    <h1>{{session('user')->username}}</h1>
    <h1>Thêm quyền quận</h1>
    <a href="showaccessdistrict">Xem quyền quận</a> <br>
    <form action="addaccessdistrict" method="post">
        @csrf
        <input type="text" name="username"><br>
        <input type="date" name="start_date"><br>
        <input type="date" name="end_date"><br>
        <input type="submit">
    </form>
    @if(session('mes'))
        {{session('mes')}}
     @endif
</body>
</html>