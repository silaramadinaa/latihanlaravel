<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Hero</h1></center>
    @foreach ($query as $data)
        <h2>{{$data->realName}}</h2>
        <h2>{{$data->heroName}}</h2>
        <h2>{{$data->power}}</h2>
        <h2>{{$data->kindofpower}}</h2>
        <h2>{{$data->gender}}</h2>
        <h2>{{$data->height}}</h2>
        <h2>{{$data->weight}}</h2>
        <h2>{{$data->bornDate}}</h2>
        <hr>
    @endforeach
</body>
</html>