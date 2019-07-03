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
        <strong>Laporan Inventaris Sarana dan Prasarana </strong> <br>
        SMK NEGERI 2 CIMAHI<br>

        JL. Kamarung KM. 1,5 No. 69 , RT/RW 2/5, Dsn. -,
        Ds./Kel Citeureup, Kec. Cimahi Utara, Kota Cimahi, Prop. Jawa Barat<br>
        <b>Telepon :</b> 022-6656088    <b>Fax :</b> 022-66560         <b>Email :</b> smkn2cmi@yahoo.com        <b>Website :</b> http://smkn2cmi.sch.id</p>
    <hr />
    <br>
    <p align="center" ><strong>Laporan Data Petugas <br> Inventaris Sarana dan Prasarana SMKN 2 Cimahi</strong></p>
    <table class="styletable">
        <thead>
        <tr>
            <th style="width: 10%;"> No </th>
            <th> NIP </th>
            <th> Nama </th>
            <th> Email </th>
            <th> Alamat </th>
        </tr>
        </thead>
        <tbody>
        @foreach($andre_petugas as $key => $data)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->andre_nip }}</td>
                <td>{{ $data->andre_nama_petugas }}</td>
                <td>{{ $data->andre_email }}</td>
                <td>{{ $data->andre_alamat }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




</div>
<footer>
    <div>
        <p>Cimahi,{{ request()->tanggal ? : date('d-m-Y')}}</p>
        <p align="right" style="margin-top:-100px">Cimahi,{{ request()->tanggal ? : date('d-m-Y')}}</p>
    </div>
    <div>
        <p>________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wali Kelas</p>
        <p align="right" style="margin-top:-100px">________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Orang tua Siswa</p>
    </div>
</footer>
</body>


</html>