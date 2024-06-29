@extends('layouts.app')
@section('content')

<br>
<br>
<div class="row">
    <div class="col-6">
        <form action="" method="post">
            @csrf
            <div class="form-group text-center">
                
                <h2>Bienvenue</h2>

            </div>
            <div class="form-group m-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="login" value="{{old('login')}}" />
            </div>
            <div class="form-group m-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}" />

            </div>
            <div class="text-danger fw-bold m-3">
            @if(session('erreur'))
                {{ session('erreur') }}
            @endif
            </div>
            <div class="form-group m-3">
            <button class="btn btn-primary w-100">Se connecter</button>

            </div>
            
        </form>
    </div>

    <div class="col-6" style="padding-left:80px;padding-top:50px">

        <img src="logo.jpg" class="w-75 logo" >
    </div>

</div>




@endsection
