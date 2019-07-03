@extends('layouts.app')

@section('content')
        <header class="page-header">
                        <h2>Data Akun</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Akun</span></li>
                            </ol>
                        </div>
                    </header>

                    <section class="panel col-md-12">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                                <h2 class="panel-title">Data Akun</h2>
                            </header>
                            
                            <div class="panel-body">
                            <a href="{{ route('andre_akun.halcreate') }}"><button class="btn btn-primary col-md-1">Tambah</button></a>
                            <a href="{{ route('andre_akun.print') }}"><button class="btn btn-primary col-md-2 col-md-offset-1">Cetak Semua</button></a>
                            <a href="{{ route('andre_akun.print-pegawai') }}"><button class="btn btn-primary col-md-2 col-md-offset-1">Cetak Pegawai</button></a>
                            <a href="{{ route('andre_akun.print-petugas') }}"><button class="btn btn-primary col-md-2 col-md-offset-1">Cetak Petugas</button></a>
                            <br>
                            <br>
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th>Nama </th>
                                            <th>E-mail</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach( $andre_akuns as $andre_akun )
                                        <tr>
                                            <td>{{ $andre_akun->name }}</td>
                                            <td>{{ $andre_akun->email }}</td>
                                            <td>{{ $andre_akun->username }}</td>
                                            <td>{{ $andre_akun->level->andre_nama_level }}</td>
                                            <td>
                                                <div class="icon-container">
                                                    <a href="{{ route('andre_akun.haledit', $andre_akun->id) }}">
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
