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
									<form role="form" method="POST" action="{{ route('andre_jenis.create') }}">
										@csrf
										<div class="form-group">
											<label>Kode Jenis</label>
											<input type="text" class="form-control{{ $errors->has('andre_kode_jenis') ? ' is-invalid' : '' }}" name="andre_kode_jenis" value="J-{{ date('d') }}{{ rand('10','99') }}-{{ date('his') }}" placeholder="Kode Jenis" required readonly>
										</div>
										<div class="form-group">
											<label>Nama Jenis</label>
											<input class="form-control{{ $errors->has('andre_nama_jenis') ? ' is-invalid' : '' }}" name="andre_nama_jenis" value="{{ old('andre_nama_jenis') }}" placeholder="Nama Level" required autofocus>
										</div>										
										<button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button> 	
								</div>
								<div class="col-md-6">
										<div class="form-group">
												<label>Keterangan</label>
												<textarea class="form-control{{ $errors->has('andre_keterangan') ? ' is-invalid' : '' }}" name="andre_keterangan" value="{{ old('andre_keterangan') }}" placeholder="Keterangan"></textarea>
										</div>
								</div>
									</form>
								</div>
							</div>
						</div><!-- /.panel-->
					</div><!-- /.col-->
		        </div><!-- /.col-->
		</div><!-- /.row --> 
@endsection
