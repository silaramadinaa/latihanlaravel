<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Table Pesanan</center>
    @foreach($pesanan as $data)
    {{$data->nama_pelanggan}} - {{$data->nama_barang}}<br>
    {{$data->qty}} - {{$data->tgl_pesan}}
    <hr>
    @endforeach
</body>
</html>