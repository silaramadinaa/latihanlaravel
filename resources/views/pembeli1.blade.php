<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Table Pembeli</center>
    @foreach($pembeli as $data)
    {{$data->nama}} - {{$data->jns_kelamin}}<br>
    {{$data->alamat}} - {{$data->kode_pos}}<br>
    {{$data->kota}} - {{$data->tgl_lahir}}
    <hr>
    @endforeach
</body>
</html>