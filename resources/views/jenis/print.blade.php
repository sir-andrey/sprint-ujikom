<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report Jenis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <style type="text/css">
       table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }   

    </style>
</head>
<body>
<div class="head">
    <p><img src="{{ asset('img/jabar.png') }}" height="100px" style="float:left;">

    <p><img src="{{ asset('img/smkn2.png') }}" width="100px" height="100px" style="float:right;">

    <p align="center">PEMERINTAH PROVINSI JAWA BARAT<br>
        DINAS PENDIDIKAN<br>
        <strong>Inventaris Sarana dan Prasarana </strong> <br>
        SMK NEGERI 2 CIMAHI<br>

        JL. Kamarung KM. 1,5 No. 69 , RT/RW 2/5, Dsn. -,
        Ds./Kel Citeureup, Kec. Cimahi Utara, Kota Cimahi, Prov. Jawa Barat<br>
        <b>Telepon :</b> 022-6656088    <b>Fax :</b> 022-66560         <b>Email :</b> smkn2cmi@yahoo.com        <b>Website :</b> http://smkn2cmi.sch.id</p>
    <hr />
    <br>
    <p align="center" ><strong>Laporan Data Jenis <br> Inventaris Sarana dan Prasarana SMKN 2 Cimahi</strong></p>
    <table class="styletable">
        <thead>
        <tr>
            <th style="width: 10%;"> No </th>
            <th> Kode Jenis </th>
            <th> Nama Jenis </th>
            <th> Keterangan </th>
        </tr>
        </thead>
        <tbody>
        @foreach($andre_jenis as $key => $data)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->andre_kode_jenis }}</td>
                <td>{{ $data->andre_nama_jenis }}</td>
                <td>{{ $data->andre_keterangan }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>





<footer>
    <div>
        <p>Cimahi,{{ request()->tanggal ? : date('d-m-Y')}}</p>
        <p align="right" style="margin-top:-100px">Cimahi,{{ request()->tanggal ? : date('d-m-Y')}}</p>
    </div>
    <div>
        <p>________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Waka Sarana</p>
        <p align="right" style="margin-top:-100px">________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepala Sekolah</p>
    </div>
</footer>
</body>


</html>