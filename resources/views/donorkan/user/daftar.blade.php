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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Kode user</th>
                                        <th>Akses</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; ?>
                                        @foreach($data as $dt)
                                        <tr>
                                        <td>{{ $no }}</td>
                                            <td>{{ $dt->name}}</td>
                                            <td>{{ $dt->email}}</td>
                                            <td>{{ $dt->id}}</td>
                                            <td>{{ $dt->akses}}</td>
                                            <td>
                                            <a href= "/Home/Admin/Daftar/User/Hapus/{{ $dt->id }}" class="btn btn-danger">Hapus</a>
                                            </td>
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