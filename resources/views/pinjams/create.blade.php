@extends('layouts.app')

@section('content')
		<header class="page-header">
                        <h2>Peminjaman</h2>

                        <div class="right-wrapper pull-right mr-2">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Peminjaman</span></li>
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
							<form role="form" method="POST" action="{{ route('andre_pinjam.create') }}">
								@csrf
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Peminjaman</h2>
										<p class="panel-subtitle">
											Masukkan data untuk dimasukkan ke data peminjaman.
										</p>
									</header>
									<div class="panel-body">
										<!-- Section 1 -->
										<div class="col-md-6">

											<div class="form-group">
												<label class="col-sm-3 control-label">Kode Peminjaman</label>
												<div class="col-sm-9">
													<input type="text" name="andre_kode_pinjam" class="form-control" value="P-{{ date('d') }}{{ rand('10','99') }}-{{ date('his') }}" readonly>
												</div>
											</div>
											
												@if (Auth::user()->andre_id_level == 3)
													<input type="text" name="andre_id_pegawai" value=" {{ Auth::user()->id }} " hidden>
												@else
												<div class="form-group">
													<label class="col-sm-3 control-label">Nama Pegawai <span class="required">*</span></label>
													<div class="col-sm-9">
														<select data-plugin-selectTwo class="form-control populate" name="andre_id_pegawai" required>
															<option value="">-- Pilih Pegawai --</option>
															@foreach($andre_pegawai as $data)
															<option value="{{ $data->andre_id_pegawai }}">{{ $data->andre_nama_pegawai }}</option>
															@endforeach
														</select>
														<input type="hidden" name="andre_id_petugas" value="{{ auth::user()->id }}">
													</div>
												</div>
												@endif

											
											<div class="form-group">
												<label class="col-sm-3 control-label">Tanggal Pinjam</label>
												<div class="col-sm-9">
														<input type="text" name="andre_tanggal_pinjam" class="form-control" value="{{ date('Y-m-d') }}" readonly required/>
												</div>
											</div>
											<!-- form perulangan -->
											<!-- <div class="form-group">
												<button class="btn btn-success add-more" type="button"><i class="fa fa-plus"></i> Add</button>
											</div> -->
										</div>

										<!-- Section 2 -->
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-sm-3 control-label">Status Pinjam <span class="required">*</span></label>
												<div class="col-sm-9">
													<select id="status" class="form-control" name="andre_status_peminjaman" onchange="permanent();" required>
														<option value="">-- Pilih Status --</option>
														<option value="Sementara">Sementara</option>
														<option value="Permanen" id="perm">Permanen</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Tanggal Kembali <span class="required">*</span></label>
												<div class="col-sm-9">
													<input id="tanggal_kembali" type="date" name="andre_tanggal_kembali" class="form-control tanggal" >

													<input type="hidden" name="status_detail" class="status">
												</div>
											</div>
										</div>

										<!-- Section Body -->
										<div class="col-md-12">
											<p></p>
										</div>
										<div class="control-group after-add-more">
											<div class="col-md-6">
											<input type="text" name="steps[]" hidden id="steps">
												<!-- <div class="form-group">
												<label class="col-sm-3 control-label">Jenis <span class="required">*</span></label>
													<div class="col-sm-9 tambahElemen">
														<select id="jenis" class="form-control" name="jenis" onchange="jenis()">
															@foreach($andre_jenis as $data)
															<option value="{{ $data->andre_id_jenis }}" class="{{ $data->andre_id_jenis }}" id="barang">{{ $data->andre_nama_jenis }}</option>
															@endforeach
														</select>
													</div>
												</div> -->
												<div class="form-group">
												<label class="col-sm-3 control-label">Barang <span class="required">*</span></label>
													<div class="col-sm-9 tambahElemen">
														<select data-plugin-selectTwo class="form-control populate" name="andre_id_inventaris">
																<option value="">-- Cari Barang --</option>
																@foreach($rusak as $data_barang)
																	<option value="{{ $data_barang->andre_id_inventaris }}">{{ $data_barang->andre_nama }}</option>
																@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-3 control-label">Jumlah <span class="required">*</span> </label>
													<div class="col-md-9">
														<input type="number" name="andre_jumlah" class="form-control" min="0" required>
														
													</div>	 
												</div>
											</div>
										</div>
									</div>
								</div>
									<footer class="panel-footer">
									<div class="row">
											<div class="col-sm-12 col-sm-offset-3">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>

						<div class="copy hide">
					      <div class="control-group">
						  				<div class="col-md-6" style="margin-top:20px;">
											<input type="text" name="steps[]" hidden id="steps">
												<div class="form-group">
												<label class="col-sm-3 control-label">Barang <span class="required">*</span></label>
													<div class="col-sm-9">
														<select class="form-control" name="andre_id_inventaris">
															@foreach($andre_inventaris as $data)
															<option value="{{ $data->andre_id_inventaris }}">{{ $data->andre_nama }}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-6" style="margin-top:20px;">
												<div class="form-group">
													<label class="col-md-3 control-label">Jumlah </label>
													<div class="col-md-9">
														<input type="number" name="andre_jumlah" class="form-control" min="0">
														<div class="form-group">
															<button class="btn btn-danger remove col-sm-5" type="button"><i class="fa fa-times"></i> Remove</button>
														</div>
													</div>	
												</div>
												
											</div>
										</div>
									</div>					
					      </div>
					    </div>
@endsection
