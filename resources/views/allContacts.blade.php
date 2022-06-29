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
        ID: {{$item->id}}
        NAME: {{$item->name}}
        COMPANY: {{$item->company}}
        PHONE: {{$item->phone}}
        EMAIL: {{$item->email}}
        birthday: {{$item->birthday}}
    </div>
@endforeach
{{$all->links()}}
</body>
</html>
