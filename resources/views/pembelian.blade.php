<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Table Pembelian</center>
    @foreach($pembelian as $data)
    {{$data->nama_barang}} - {{$data->nama_suplier}}<br>
    {{$data->qty}} - {{$data->tgl}}
    <hr>
    @endforeach
</body>
</html>