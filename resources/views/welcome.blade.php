<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/api/v1/notebook" method="post">
    @csrf
<button>create</button>
</form>
<form action="/api/v1/notebook/4" method="post">
    @csrf
    @method('delete')
    <button>Delete</button>
</form>
<form action="/api/v1/notebook/random" method="post">
    @csrf
    <button>Create random</button>
</form>
<a href="/api/v1/notebook">note</a>
<a href="/api/v1/notebook/3">note1</a>

</body>
</html>
