@extends('layouts.app')

@section('content')
        <header class="page-header">
                        <h2>Data Level</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Level</span></li>
                            </ol>
                        </div>
                    </header>

            <section class="panel col-md-12">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Data Level</h2>
                            </header>
                            <div class="panel-body">
                            <a href="{{ route('andre_level.print') }}"><button class="btn btn-primary col-md-1">Cetak</button></a>
                            <br>
                            <br>
                                <table class="table table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th>Nama Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach( $andre_levels as $andre_level )
                                        <tr>
                                            <td>{{ $andre_level->andre_nama_level }}</td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        

@endsection
