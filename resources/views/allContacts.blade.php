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
@foreach($all as $item)
    <div>
{{--        открывает конкретную запись--}}
        <a href="/api/v1/notebook/{{$item->id}}">
            ID: {{$item->id}}
            NAME: {{$item->name}}
            COMPANY: {{$item->company}}
            PHONE: {{$item->phone}}
            EMAIL: {{$item->email}}
            birthday: {{$item->birthday}}
            <img width="200px" src="{{$item->photo}}" alt="">
        </a>
        {{--Удалаяет определенную запись--}}
        <form action="/api/v1/notebook/{{$item->id}}" method="post">
            @csrf
            @method('delete')
            <button>Delete</button>
        </form>
    </div>
@endforeach
{{--пагинация за счет ларавел, да криво выглдит, но я и не фронтом же занимаюсь здесь)--}}
{{$all->links()}}
</body>
</html>
