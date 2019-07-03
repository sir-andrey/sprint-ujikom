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
							<form role="form" method="POST" action="{{ route('andre_level.edit') }}">
								@csrf
								<div class="form-group">
									<input type="text" name="andre_id_level" value="{{ $andre_level->andre_id_level }}" hidden>
									<label>Nama Level</label>
									<input id="username" type="text" class="form-control{{ $errors->has('andre_nama_level') ? ' is-invalid' : '' }}" name="andre_nama_level" value="{{ $andre_level->andre_nama_level  }}" placeholder="Nama Level" required autofocus>
                            
								</div>
									<button type="submit" class="btn btn-primary col-md-2">Simpan</button>
									
								</form>
								<a href="{{ route('andre_level.delete', $andre_level->andre_id_level) }}"><button class="btn btn-danger col-md-2">Hapus</button></a>
								</div>
								<div class="col-md-6">

								</div>
							
						</div>
					</div>
        
		
@endsection
