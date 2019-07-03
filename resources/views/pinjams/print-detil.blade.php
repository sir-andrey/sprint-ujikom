<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report Detil Pinjam</title>
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
        .p-tanggal{
            margin: 0;
            font-size: 8pt;
            font-style: italic;
        }

        .kolom-ttd{
            margin-top: 300px;
            bottom: 0;
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
    <p align="center" ><strong>Laporan Peminjaman Barang</strong></p>
    <table class="border-head" cellspacing="10" cellpadding="5">
        <tr><td colspan="4">Kode Pinjam</td><td colspan="4">{{ $andre_pinjam->andre_kode_pinjam }}</td></tr>
        <tr><td colspan="4">Nama</td><td colspan="4">{{ $andre_pinjam->andre_pegawai->andre_nama_pegawai }}</td></tr>
        <tr><td colspan="4">Tanggal Pinjam</td><td colspan="4">{{ $andre_pinjam->andre_tanggal_pinjam }}</td></tr>
        @if( $andre_pinjam->andre_status_peminjaman == 'Sementara')
        <tr><td colspan="4">Batas Pengembalian</td><td colspan="4">{{ $andre_pinjam->andre_tanggal_kembali }}</td></tr>
        @endif
    </table>
    <br>
    <table class="styletable">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Kembali</th>
                <th>Status Pinjam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $andre_detil as $data )  
            <tr>
                <td>{{ $data->inventaris->andre_nama }}</td>
                <td>{{ $data->andre_jumlah }}</td>
                <td>{{ $data->inventaris->andre_id_ruang }}</td>
                <td>{{ $data->andre_status }}</td>
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