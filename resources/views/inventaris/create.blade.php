@extends('layouts.app')

@section('content')
		<header class="page-header">
                        <h2>Inventaris</h2>

                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Inventaris</span></li>
                            </ol>
                        </div>
                    </header>
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

        					<div class="col-md-12">
							<form role="form" method="POST" action="{{ route('andre_inventaris.create') }}">
								@csrf
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Inventaris</h2>
										<p class="panel-subtitle">
											Masukkan data untuk dimasukkan ke data inventaris.
										</p>
									</header>
									<div class="panel-body">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-sm-3 control-label">Kode Inventaris </label>
												<div class="col-sm-9">
													<input type="text" name="andre_kode_inventaris" class="form-control" value="I-{{ date('d') }}{{ rand(10,99) }}-{{ date('his') }} " required readonly/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Nama <span class="required">*</span></label>
												<div class="col-sm-9">
														<input type="text" name="andre_nama" class="form-control" placeholder="Masukkan Nama" required autofocus/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Kondisi <span class="required">*</span>	</label>
												<div class="col-sm-9">
													<select class="form-control" name="andre_kondisi" required>
														<option value="">-- Pilih Kondisi --</option>
														<option value="Baik">Baik</option>
														<option value="Rusak">Rusak</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Keterangan</label>
												<div class="col-sm-9">
													<textarea name="andre_keterangan" rows="5" class="form-control" placeholder="Masukkan Keterangan"></textarea>
													<input type="text" name="andre_tanggal_register" value=" {{ date('Y-m-d') }} " hidden>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-sm-3 control-label">Jenis <span class="required">*</span></label>
												<div class="col-sm-9">
													<select class="form-control" name="andre_id_jenis" required>
														<option value="">-- Pilih Jenis --</option>
														@foreach($andre_jenis as $data)
														<option value="{{ $data->andre_id_jenis }}">{{ $data->andre_nama_jenis }}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Ruang <span class="required">*</span></label>
												<div class="col-sm-9">
														<select class="form-control" name="andre_id_ruang" required>
															<option value="">-- Pilih Ruang --</option>
															@foreach($andre_ruangs as $data)
															<option value="{{ $data->andre_id_ruang }}">{{ $data->andre_nama_ruang }}</option>
															@endforeach
														</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Petugas</label>
												<div class="col-sm-9">
													<select class="form-control" disabled>
														
														@foreach($andre_petugas as $data)
														<option value="{{ $data->andre_id_petugas }}">{{ $data->andre_nama_petugas }}</option>
														@endforeach
													</select>
													<input type="hidden" name="andre_id_petugas" value="1">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Jumlah <span class="required">*</span></label>
												<div class="col-sm-9">
													<input class="form-control" type="number" name="andre_jumlah" placeholder="Masukkan Jumlah" required>
												</div>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-12 col-sm-offset-3">
												<button class="btn btn-primary">Simpan</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
@endsection
