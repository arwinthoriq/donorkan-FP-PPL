@extends('donorkan.main')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-8">

    <div class="col-lg-4 col-md-6">
        <aside class="profile-nav alt">
            <section class="card">
                <ul class="list-group list-group-flush">
                    <li class="btn btn-success"> <i>Jumlah pendonor : </i> {{ $transaksi2->count() }} </li>
                </ul>
            </section>
        </aside>
    </div>    
    
        @foreach ($transaksi as $item)
    <div class="col-lg-4 col-md-6">
        <aside class="profile-nav alt">
            <section class="card">

                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="text-light display-6"><i>Pasien : </i>{{ $item->darah->nama }} </h4>
                        </div>
                    </div> 
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="btn btn-warning"> <i>Nama pendonor : </i> {{ $item->user->name}} </li>
                </ul>

            </section>
        </aside>
    </div>    
        @endforeach

        </div>
    </div>
</div>
@endsection
