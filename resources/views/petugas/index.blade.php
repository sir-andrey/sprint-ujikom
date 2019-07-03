@extends('layouts.app')

@section('content')
        <header class="page-header">
                        <h2>Data Petugas</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Petugas</span></li>
                            </ol>
                        </div>
                    </header>
                    <section class="panel col-md-12">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Data Petugas</h2>
                            </header>
                            <div class="panel-body">

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
                                         @foreach( $andre_petugas as $andre_petugas )
                                        <tr>
                                            <td>{{ $andre_petugas->name }}</td>
                                            <td>{{ $andre_petugas->email }}</td>
                                            <td>{{ $andre_petugas->username }}</td>
                                            <td>{{ $andre_petugas->level->andre_nama_level }}</td>
                                            <td>
                                                <div class="icon-container">
                                                    <a href="{{ route('andre_petugas.haledit', $andre_petugas->id) }}">
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
                        <a href="{{ route('andre_petugas.halcreate') }}"><button class="btn btn-primary col-md-6">Create Data</button></a>
                        <a href="{{ route('andre_petugas.print') }}"><button class="btn btn-primary col-md-6">Cetak Data</button></a>
                    
@endsection
