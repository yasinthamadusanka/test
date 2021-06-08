<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form action="user" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="LOG IN">
    </form>
</body>
</html>