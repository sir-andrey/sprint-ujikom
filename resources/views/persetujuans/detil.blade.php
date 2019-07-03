@extends('layouts.app')

@section('content')
       <header class="page-header">
                        <h2>Persetujuan</h2>

                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Persetujuan</span></li>
                            </ol>
                        </div>
                    </header>

                    <section class="panel col-md-12">
                    @if(session()->has('success-create'))
                        <div class="row-md-5">
                            <div class="alert alert-success"> 
                                <center>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                    </button>
                                    <strong>Berhasil</strong>
                                    {{ session()->get('success-create') }}
                                </center>
                            </div>
                        </div>
                        @endif
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>

                                <h2 class="panel-title">Detil Peminjaman</h2>
                            </header>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <p>Nama Peminjam : {{ $andre_pinjam->andre_pegawai->andre_nama_pegawai }}</p>
                                    <p>Tanggal Pinjam : {{ $andre_pinjam->andre_tanggal_pinjam }}</p>
                                    <p>Batas Waktu Pengembalian : {{ $andre_pinjam->andre_tanggal_kembali }}</p>
                                    @if( auth::user()->andre_id_level != 3)
                                    <a href="{{ route('andre_persetujuan.approve', $andre_pinjam->andre_id_pinjam) }}"><button class="btn btn-success col-md-2">Setuju</button></a>
                                    <a href="{{ route('andre_persetujuan.cancel', $andre_pinjam->andre_id_pinjam) }}"><button class="btn btn-danger col-md-2">Tolak</button></a>
                                    @endif
                                </div>
                            </div>
                        </section>

                    <section class="panel col-md-12">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>

                                <h2 class="panel-title">Detil Barang</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none">
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
                                            <td>
                                                @if ( $data->andre_tanggal_kembali == 0000-00-00)

                                                @else
                                                {{ $data->andre_tanggal_kembali }}
                                                @endif
                                            </td>
                                            @if ($data->pinjam->andre_status_persetujuan == 'Pending')
                                            <td>Pending</td>
                                            @else
                                            <td>{{ $data->andre_status }}</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
@endsection
