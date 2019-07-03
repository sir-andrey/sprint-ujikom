@extends('layouts.app')

@section('content')
<header class="page-header">
                        <h2>Data Pegawai</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Pegawai</span></li>
                            </ol>
                        </div>
                    </header>
<div class="row">
		<div class="panel panel-default">
					<div class="panel-heading">Edit Data</div>
					<div class="panel-body">
						@if ($errors->any())
	                  	<div class="alert alert-danger">
	                      	<ul>
	                          	@foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                          	@endforeach
	                      	</ul>
	                    </div><br />
	                  	@endif
						<div class="col-md-6">
							<form role="form" method="POST" action="{{ route('andre_petugas.edit') }}">
								@csrf
								<div class="form-group">
									<input type="text" name="andre_id_petugas" value="{{ $andre_petugas->andre_id_petugas }}" hidden>
									<label>Kode Petugas</label>
									<input type="text" class="form-control{{ $errors->has('andre_kode_petugas') ? ' is-invalid' : '' }}" name="andre_kode_petugas" value="{{ $andre_petugas->andre_kode_petugas  }}" placeholder="Nama Level" required autofocus>
                            
								</div>
								<div class="form-group">
									<label>Nama Petugas</label>
									<input type="text" class="form-control{{ $errors->has('andre_nama_petugas') ? ' is-invalid' : '' }}" name="andre_nama_petugas" value="{{ $andre_petugas->andre_nama_petugas  }}" placeholder="Nama Level" required autofocus>
                            
								</div>
									<button type="submit" class="btn btn-primary col-md-2">Simpan</button>
								
								<a class="btn btn-danger col-md-2" href="{{ route('andre_petugas.delete', $andre_petugas->andre_id_petugas) }}">Hapus</a>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control{{ $errors->has('andre_keterangan') ? ' is-invalid' : '' }}" name="andre_keterangan" value="" placeholder="Keterangan" required>{{ $andre_petugas->andre_keterangan }}</textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
        
		
@endsection
