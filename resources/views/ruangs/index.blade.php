@extends('layouts.app')

@section('content')
        <header class="page-header">
                        <h2>Data Ruang</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Ruang</span></li>
                            </ol>
                        </div>
                    </header>
                    <section class="panel col-md-12">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Data Ruang</h2>
                            </header>
                            <div class="panel-body">
                            <a href="{{ route('andre_ruang.halcreate') }}"><button class="btn btn-primary col-md-1">Tambah</button></a>
                            <a href="{{ route('andre_ruang.print') }}"><button class="btn btn-primary col-md-1">Cetak</button></a>
                            <br>
                            <br>
                            
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th>Kode Ruang</th>
                                            <th>Nama Ruang</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach( $andre_ruangs as $andre_ruang )
                                        <tr>
                                            <td>{{ $andre_ruang->andre_kode_ruang }}</td>
                                            <td>{{ $andre_ruang->andre_nama_ruang }}</td>
                                            <td>{{ $andre_ruang->andre_keterangan }}</td>
                                            <td>
                                                <div class="icon-container">
                                                    <a href="{{ route('andre_ruang.haledit', $andre_ruang->andre_id_ruang) }}">
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
