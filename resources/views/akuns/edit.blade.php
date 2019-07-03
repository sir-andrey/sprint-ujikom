@extends('layouts.app')

@section('content')
<header class="page-header">
                        <h2>Data Akun</h2>
                    
                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Data Akun</span></li>
                            </ol>
                        </div>
                    </header>
<div class="row">
		        <div class="col-lg-12">
		        	<div class="panel panel-default">
							<div class="panel-heading">{{ __('Ubah Data') }}</div>
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
									<form role="form" method="POST" action="{{ route('andre_akun.create') }}">
										@csrf
										<div class="form-group">
											<label>NIP</label>
											<input class="form-control{{ $errors->has('andre_nip') ? ' is-invalid' : '' }}" name="andre_nip" value="{{ $data->andre_nip }}" placeholder="Nama Petugas" maxlength="16" required readonly>
										</div>
										<div class="form-group">
											<label>Nama</label>
											<input class="form-control{{ $errors->has('andre_nama_petugas') ? ' is-invalid' : '' }}" name="andre_nama_petugas" value="{{ Auth::user()->name }}" placeholder="Nama Petugas" required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control{{ $errors->has('andre_email') ? ' is-invalid' : '' }}" name="andre_email" value="{{ Auth::user()->email }}" placeholder="Email" required>
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control{{ $errors->has('andre_username') ? ' is-invalid' : '' }}" name="andre_username" value="{{ Auth::user()->username }}" placeholder="Username" required autofocus>
										</div>
										<div class="form-group">
											<label>Level</label>
											<select class="form-control" name="andre_id_level">
												@foreach($andre_levels as $andre_level)
												<option value="{{ $andre_level->andre_id_level }}">{{ $andre_level->andre_nama_level }}</option>
												@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
										<a href="{{ route('andre_akun.delete', Auth::user()->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label>Alamat</label>
											<textarea name="andre_alamat" rows="5" class="form-control{{ $errors->has('andre_alamat') ? ' is-invalid' : '' }}" placeholder="Alamat">{{ $data->andre_alamat }}</textarea>
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control{{ $errors->has('andre_password') ? ' is-invalid' : '' }}" name="andre_password" value="{{ old('andre_password') }}" placeholder="Password" required>
										</div>
										<div class="form-group">
											<!-- <label>Ketik Ulang Password</label>
											<input class="form-control{{ $errors->has('andre_password') ? ' is-invalid' : '' }}" name="andre_password" value="{{ old('andre_password') }}" placeholder="Ketik Ulang Password" required> -->
										</div>
								</div>
									</form>
								</div>
							</div>
						</div><!-- /.panel-->
					</div><!-- /.col-->
		        </div><!-- /.col-->
        
		
@endsection
