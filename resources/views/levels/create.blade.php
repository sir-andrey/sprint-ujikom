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
        
		<div class="row">
		        <div class="col-lg-12">
		        	<div class="panel panel-default">
							<div class="panel-heading">{{ __('Tambah Data') }}</div>
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
									<form role="form" method="POST" action="{{ route('andre_level.create') }}">
										@csrf
										<div class="form-group">
											<label>Nama Level</label>
											<input id="username" type="text" class="form-control{{ $errors->has('andre_nama_level') ? ' is-invalid' : '' }}" name="andre_nama_level" value="{{ old('andre_nama_level') }}" placeholder="Nama Level" required autofocus>
										</div>
										<button type="submit" class="btn btn-primary">{{ __('Tambah Data') }}</button> 	
								</div>
									</form>
								</div>
							</div>
						</div><!-- /.panel-->
					</div><!-- /.col-->
		        </div><!-- /.col-->
		</div><!-- /.row --> 
@endsection
