@extends('donorkan.main')

@section('content')

 <!-- Form Element area Start-->
 <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="post" action="{{route('name.donorkan.user.setting')}}">
                                                    <div class="card mb-3">
                                                    
                                                    <div class="card-body">
                                                    {{csrf_field()}}

                                                    

                                                        <div class="form-group form-label-group">
                                                            <input type="text" name="name"
                                                            class="form-control {{$errors->has('name')?'is-invalid':''}}"
                                                            value="{{old('name', $dt->name)}}"
                                                            id="iName" placeholder="Name" required>
                                                            <label for="iName">Name</label>
                                                            @if($errors->has('name'))
                                                            <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                                            @endif
                                                        </div>

                                                        <div class="form-group form-label-group">
                                                            <input type="text" name="email"
                                                            class="form-control {{$errors->has('email')?'is-invalid':''}}"
                                                            value="{{old('name', $dt->email)}}"
                                                            id="iEmail" placeholder="Email" required>
                                                            <label for="iEmail">Email</label>
                                                            @if($errors->has('email'))
                                                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                                            @endif
                                                        </div>  

                                                        <div class="form-group form-label-group">
                                                            <input type="password" name="password"
                                                            class="form-control {{$errors->has('password')?'is-invalid':''}}"    
                                                            id="iPassword" placeholder="Password">
                                                            <label for="iPassword">Password</label>
                                                            @if($errors->has('password'))
                                                            <div class="invalid-feedback">{{$errors->first('password')}}</div>
                                                            @endif
                                                            <div class="form-text text-muted">
                                                                <small>kosongkan password apabila tidak diubah</small>
                                                            </div>
                                                        </div>   

                                                        <div class="form-group form-label-group">
                                                            <input type="password" name="repassword"
                                                            class="form-control {{$errors->has('repassword')?'is-invalid':''}}"    
                                                            id="iRePassword" placeholder="Re Password">
                                                            <label for="iRePassword">Re Password</label>
                                                            @if($errors->has('repassword'))
                                                            <div class="invalid-feedback">{{$errors->first('repassword')}}</div>
                                                            @endif
                                                        </div>   
                                                    </div>
                                                    <div class="card-footer">
                                                    <button type="submit" class="btn btn-info shadow-sm">Update</button>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection