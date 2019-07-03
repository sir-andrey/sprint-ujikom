@extends('layouts.app')

@section('content')
<header class="page-header">
                        <h2>Data Jenis</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Jenis</span></li>
                            </ol>
                        </div>
                    </header>


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
							<form role="form" method="POST" action="{{ route('andre_jenis.edit') }}">
								@csrf
								<div class="form-group">
									<input type="text" name="andre_id_jenis" value="{{ $andre_jenis->andre_id_jenis }}" hidden>
									<label>Kode Jenis</label>
									<input type="text" class="form-control{{ $errors->has('andre_kode_jenis') ? ' is-invalid' : '' }}" name="andre_kode_jenis" value="{{ $andre_jenis->andre_kode_jenis  }}" placeholder="Nama Level" required readonly>
                            
								</div>
								<div class="form-group">
									<label>Nama Jenis</label>
									<input type="text" class="form-control{{ $errors->has('andre_nama_jenis') ? ' is-invalid' : '' }}" name="andre_nama_jenis" value="{{ $andre_jenis->andre_nama_jenis  }}" placeholder="Nama Level" required autofocus>
                            
								</div>
									<button type="submit" class="btn btn-primary col-md-2">Simpan</button>
								
								<a class="btn btn-danger col-md-2" href="{{ route('andre_jenis.delete', $andre_jenis->andre_id_jenis) }}" onclick="alert()">Hapus</a>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control{{ $errors->has('andre_keterangan') ? ' is-invalid' : '' }}" name="andre_keterangan" value="" placeholder="Keterangan">{{ $andre_jenis->andre_keterangan }}</textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
        
		
@endsection
