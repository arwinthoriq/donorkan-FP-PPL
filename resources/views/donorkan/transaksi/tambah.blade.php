@extends('donorkan.main')

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Donorkan</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('name.donorkan.transaksi.tambah') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <input  type="" name="pendonor_id" value="{{Auth::user()->id}}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <input  type="" name="pasien_id" value="{{$dt->pasien_id}}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <input  type="" name="darah_id" value="{{$dt->id}}" class="form-control">
                                </div>
                            </div>

                            

                                                            
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>                         
                </div>
            </div>

    <div class="col-lg-4 col-md-6">
        <aside class="profile-nav alt">
            <section class="card">

                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="text-light display-6">Informasi Pasien</h4>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                         <i>Nama : </i> {{$dt->nama}}
                    </li>
                    <li class="list-group-item">
                         <i>Golongan Darah :  </i> {{$dt->golongan_darah}}
                    </li>
                    <li class="list-group-item">
                         <i>Usia :     </i> {{$dt->usia}}
                    </li>
                    <li class="list-group-item">
                         <i>Jenis Kelamin :       </i> {{$dt->jenis_kelamin}}
                    </li>
                    <li class="list-group-item">
                         <i>Nomor Hp :    </i> {{$dt->no_hp}}
                    </li>
                    <li class="list-group-item">
                         <i>Riwayat Penyakit :      </i> {{$dt->riwayat_penyakit}}
                    </li>
                    <li class="list-group-item">
                         <i>Alamat :     </i>   {{$dt->alamat}} 
                    </li>
                    <li class="list-group-item">
                         <i>Tanggal :     </i> {{ date("d F Y", strtotime($dt->created_at)) }}
                    </li>
                </ul>

            </section>
        </aside>
    </div>
            
        </div>
    </div>
</div>


@endsection