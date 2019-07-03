@extends('layouts.app')

@section('content')
       <header class="page-header">
                        <h2>Data Inventaris</h2>

                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Inventaris</span></li>
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

                                <h2 class="panel-title">Data Inventaris</h2>
                            </header>
                            <div class="panel-body">
                            <a href="{{ route('andre_inventaris.halcreate') }}"><button class="btn btn-primary col-md-1">Tambah</button></a>
                            &nbsp;
                            <a href="{{ route('andre_inventaris.print') }}"><button class="btn btn-primary col-md-1">Cetak</button></a>
                            <br>
                            <br>
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th>Kode Inventaris</th>
                                            <th>Nama</th>
                                            <th>Kondisi</th>
                                            <th>Jumlah</th>
                                            <th>Jenis</th>
                                            <th>Ruang</th>
                                            <th>Petugas</th>
                                            <th>Tanggal Registrasi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach( $andre_inventaris as $key => $andre_inventaris )
                                        <tr>
                                            <td>{{ $andre_inventaris->andre_kode_inventaris }}</td>
                                            <td>{{ $andre_inventaris->andre_nama }}</td>
                                            <td>{{ $andre_inventaris->andre_kondisi }}</td>
                                            <td>{{ $andre_inventaris->andre_jumlah }}</td>
                                            <td>{{ $andre_inventaris->jenis->andre_nama_jenis }}</td>
                                            <td>{{ $andre_inventaris->ruang->andre_nama_ruang }}</td>
                                            <td>{{ $andre_inventaris->petugas->andre_nama_petugas}}</td>
                                            <td>{{ $andre_inventaris->created_at->format('d M Y') }}</td>
                                            <td>{{ $andre_inventaris->andre_keterangan }}</td>
                                            <td>
                                                <div class="icon-container">
                                                    <a href="{{ route('andre_inventaris.haledit', $andre_inventaris->andre_id_inventaris) }}">
                                                        <span class="fa fa-external-link btn-lg" ></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
@endsection
