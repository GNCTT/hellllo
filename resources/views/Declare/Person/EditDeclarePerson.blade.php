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
    <h1>Sửa khai báo dân số</h1>
    @if(session('mes'))
        {{session('mes')}} <br>
    @endif
    <a href="showdeclareperson">Xem khai báo dân số</a> <br>
    <form action="editdeclareperson" method="post">
        @csrf
        <input type="text" name="person_id"> <br>
        <input type="text" name="person_name"> <br>
        <input type="date" name="person_date"> <br>
        <input type="text" name="person_gender"> <br>
        <input type="submit">
    </form>
</body>
</html>