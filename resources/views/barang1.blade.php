<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Table Barang</center>
    @foreach($barang as $data)
    {{$data->nama}} - {{$data->varian}}<br>
    {{$data->harga_beli}} - {{$data->harga_jual}}
    <hr>
    @endforeach
</body>
</html>