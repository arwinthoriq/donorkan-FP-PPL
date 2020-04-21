@extends('donorkan.main')

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Minta Darah</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('name.donorkan.darah.tambah') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <input  type="hidden" name="pasien_id" value="{{Auth::user()->id}}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Golongan Darah</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="golongan_darah" placeholder="Golongan Darah" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama Pasien</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="nama" placeholder="Nama Pasien" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Usia</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="usia" placeholder="Usia" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="laki-laki">laki-laki</option> 
                                        <option value="perempuan">perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">No Hp</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="no_hp" placeholder="No Hp" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Riwayat Penyakit</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="riwayat_penyakit" placeholder="Riwayat Penyakit" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Alamat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea type="text"  name="alamat" placeholder="Alamat" class="form-control"> </textarea>
                                </div>
                            </div>


                                                            
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>                         
                </div>
            </div>
        </div>
    </div>
</div>


@endsection