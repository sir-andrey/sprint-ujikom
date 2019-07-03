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
                        @if(session()->has('gagal-create'))
                        <div class="row-md-5">
                            <div class="alert alert-danger"> 
                                <center>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                    </button>
                                    <strong>Gagal</strong>
                                    {{ session()->get('gagal-create') }}
                                </center>
                            </div>
                        </div>
                        @endif
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>

                                <h2 class="panel-title">Persetujuan</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th>Kode Pinjam</th>
                                            @if( auth::user()->andre_id_level != 3)
                                            <th>Nama Pegawai</th>
                                            @endif
                                            <th>Tanggal Pinjam</th>
                                            <th>Status Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach( $andre_pinjams as $andre_pinjam )
                                        <tr>
                                            <td>{{ $andre_pinjam->andre_kode_pinjam }}</td>
                                            @if( auth::user()->andre_id_level != 3)
                                            <td>{{ $andre_pinjam->andre_pegawai->andre_nama_pegawai }}</td>
                                            @endif
                                            <td>{{ $andre_pinjam->andre_tanggal_pinjam }}</td>
                                            <td>{{ $andre_pinjam->andre_status_peminjaman }}</td> 
                                            <td>
                                                <div class="icon-container">
                                                    <a href="{{ route('andre_persetujuan.detil', $andre_pinjam->andre_id_pinjam) }}">
                                                        <span class="fa fa-info btn-lg" ></span>
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
