<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch Page</title>
</head>
<body>
    <table border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>  
            <th>IMAGE</th>
        </tr>

        @foreach ($detail as $x)
        <tr>
            <td>{{$x['id']}}</td>
            <td>{{$x['username']}}</td>
            <td>{{$x['password']}}</td>
            <td>{{$x['image']}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>