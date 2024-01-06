<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>users data</title>
</head>
<body>
    <h3>export users data</h3>
    <form action="{{route('users.export')}}" method="get">
        <button type="submit">Download</button>
    </form>

    <h3>import users data</h3>
    <form action="{{route('users.import')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit">upload</button>
    </form>
</body>
</html>