<script>
            function namaFungsi(){
                alert('Belum bisa ea');
                $(document).ready(function(){
                $("#btn-clone").click(function(){
                $("#table").append(
            
                `
                
                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Jenis<span class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="andre_id_jenis">
                                                                @foreach($andre_jenis as $data)
                                                                <option value="{{ $data->andre_id_jenis }}">{{ $data->andre_nama_jenis }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Jumlah </label>
                                                        <div class="col-md-6">
                                                            <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider">
                                                                <input id="listenSlider" type="hidden" value="50" />
                                                            </div>
                                                            <p class="output">The current <code>value</code> is: <b>50</b></p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
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
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Tambah Barang</label>
                                                        <div class="col-sm-9">
                                                            <input type="button" onclick="#btn-clone" value="Add" class="btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                        </tr>`
                    );
                  });
                });
            }
        </script>