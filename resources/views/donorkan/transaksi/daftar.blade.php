@extends('donorkan.main')

@section('content')

   <!-- Data Table area Start-->
   <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                   
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Golongan Darah </th>
                                        <th>Usia</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Riwayat Penyakit</th>
                                        <th>Alamat</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                        @foreach ($transaksi as $item)
                                        <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->darah->nama }}</td>
                                        <td>{{ $item->darah->golongan_darah }}</td>
                                        <td>{{ $item->darah->usia }}</td>
                                        <td>{{ $item->darah->jenis_kelamin }}</td>
                                        <td>{{ $item->darah->no_hp }}</td>
                                        <td>{{ $item->darah->riwayat_penyakit }}</td>
                                        <td>{{ $item->darah->alamat }}</td>
                                        <td>{{ date("d F Y", strtotime($item->created_at)) }}</td>
                                        </tr>
                                    <?php $no++; ?>    
                                        @endforeach
                                    
                                </tbody>
                                
                            </table>    
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection