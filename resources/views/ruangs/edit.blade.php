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


		<div class="panel panel-default">
					<div class="panel-heading">Ubah Data</div>
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
							<form role="form" method="POST" action="{{ route('andre_ruang.edit') }}">
								@csrf
								<div class="form-group">
									<input type="text" name="andre_id_ruang" value="{{ $andre_ruang->andre_id_ruang }}" hidden>
									<label>Kode Ruang</label>
									<input type="text" class="form-control{{ $errors->has('andre_kode_ruang') ? ' is-invalid' : '' }}" name="andre_kode_ruang" value="{{ $andre_ruang->andre_kode_ruang  }}" placeholder="Nama Level" required readonly>
                            
								</div>
								<div class="form-group">
									<label>Nama Ruang</label>
									<input type="text" class="form-control{{ $errors->has('andre_nama_ruang') ? ' is-invalid' : '' }}" name="andre_nama_ruang" value="{{ $andre_ruang->andre_nama_ruang  }}" placeholder="Nama Level" required autofocus>
                            
								</div>
									<button type="submit" class="btn btn-primary col-md-2">Simpan</button>
								
								<a class="btn btn-danger col-md-2" href="{{ route('andre_ruang.delete', $andre_ruang->andre_id_ruang) }}" onclick="alert()">Hapus</a>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control{{ $errors->has('andre_keterangan') ? ' is-invalid' : '' }}" name="andre_keterangan" value="" placeholder="Keterangan">{{ $andre_ruang->andre_keterangan }}</textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
        
		
@endsection
