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

        .kolom-ttd{
            margin-top: 50px;
            bottom: 0;
        }

        .p-tanggal{
            margin: 0;
            font-size: 8pt;
            font-style: italic;
        }

        .p-attd{
            float: right;
            width: 150px;
            text-align: center;
            margin: 0;
            border-bottom: solid white;
        }

        .p-ttd{
            float: right;
            width: 150px;
            margin: 0;
            text-align: center;
            padding-bottom:60px;
            border-bottom: solid;
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
    <p align="center" ><strong>Laporan Rekapitulasi Peminjaman Barang</strong></p>
    <table class="styletable">
        <thead>
        <tr>
            <th style="width: 10%;"> No </th>
            <th> Kode Pinjam </th>
            <th> Nama Pegawai </th>
            <th> Tanggal Pinjam </th>
            <th> Status </th>
        </tr>
        </thead>
        <tbody>
        @foreach($andre_pinjam as $key => $data)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->andre_kode_pinjam }}</td>
                <td>{{ $data->andre_pegawai->andre_nama_pegawai }}</td>
                <td>{{ $data->andre_tanggal_pinjam }}</td>
                <td>{{ $data->andre_status_peminjaman }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
<footer>
<p class="p-tanggal">Dicetak tanggal {{ request()->tanggal ? : date('d-M-Y')}}</p>
<div class="kolom-ttd">
    
    <p class="p-ttd">Mengetahui,<br>Petugas</p>
</div>
</footer>
</body>


</html>