<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Post</h1>
    @foreach ($posts as $surfsidemedia )
    <h3>{{ $surfsidemedia->title }}</h3>
    <h3>{{ $surfsidemedia->body }}</h3>
    @endforeach
</body>
</html>
