<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Api User Http Client</h1>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>

        <tr>
            @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['first_name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td><img src="{{ $item['avatar'] }}" alt=""></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
