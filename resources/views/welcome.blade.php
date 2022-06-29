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
{{--Ничего не делает тк нет формы--}}
<form action="/api/v1/notebook" method="post">
    @csrf
<button>create</button>
</form>
{{--создаем рандомную запись--}}
<form action="/api/v1/notebook/random" method="post">
    @csrf
    <button>Create random</button>
</form>
{{--ссылка на все записи--}}
<a href="/api/v1/notebook">note</a>

</body>
</html>
