<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Table Suplier</center>
    @foreach($suplier as $data)
    {{$data->nama}} - {{$data->alamat}}<br>
    {{$data->kode_pos}} - {{$data->kota}}
    <hr>
    @endforeach
</body>
</html>