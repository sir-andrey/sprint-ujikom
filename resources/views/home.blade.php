@extends('layouts.app')

@section('content')
<header class="page-header">
                        <h2>Dashboard</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Dashboard</span></li>
                            </ol>
                        </div>
                    </header>
                        <div class="col-md-12 col-lg-12 col-xl-12"> 
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <br>
                                                            <h4 class="title center"><strong>Inventaris Sarana dan Prasarana SMKN 2 Cimahi</strong></h4>
                                                        <br>
                                                            <div class="info center">
                                                                <img src="{{ asset('img/smkn2.png') }}" style="width: 250px;" alt="SMKN 2 Cimahi">
                                                            </div>
                                                        <br>
                                                        <br>
                                                            <h6 class="title center"><strong>Halo, {{ Auth::user()->name }}</strong></h6>
                                                        <br>
                                                        <br>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-primary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-primary m">
                                                        <i class="fa fa-archive"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Total Barang</h4>
                                                        <div class="info">
                                                            <strong class="amount">{{ $inventaris->sum('andre_jumlah') }}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-secondary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-secondary">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Barang Rusak</h4>
                                                        <div class="info">
                                                            <strong class="amount">{{ $rusak->sum('andre_jumlah') }}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-tertiary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-tertiary">
                                                        <i class="fa fa-share"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Barang Dipinjam</h4>
                                                        <div class="info">
                                                            <strong class="amount">{{ $detil->sum('andre_jumlah') }}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-quartenary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-quartenary">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                    <h4 class="title">Meminta Persetujuan</h4>
                                                        <div class="info">
                                                            <strong class="amount">{{ $pending->count('andre_id_pinjam') }}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
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

@endsection
