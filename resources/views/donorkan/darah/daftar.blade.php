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
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->golongan_darah }}</td>
                                        <td>{{ $item->usia }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->riwayat_penyakit }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ date("d F Y", strtotime($item->created_at)) }}</td>
                                        
                                        @if($item->konfirmasi == 'Diterima')
                                        <td><a href="{{ url('/Home/Pesan/Tempat/Pembayaran',['id'=>Crypt::encrypt($item->id)]) }}" class="btn btn-info">  Pembayaran </a></td>
                                        
                                      
                                            @if($item->konfirmasidua == 'Diterima')
                                            <td><a href="{{ url('/Home/Pesan/Tempat/Detail',['id'=>Crypt::encrypt($item->id)]) }}" class="btn btn-success"> Detail </a></td>
                                            @endif

                                            @if($item->konfirmasidua == 'Ditolak')
                                            <td><a  class="btn btn-danger"> Ditolak </a></td>
                                            @endif

                                         @endif  
                                         
                                         @if($item->konfirmasi == 'Ditolak')
                                        <td><a  class="btn btn-danger"> Pembayaran </a></td>
                                         @endif

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