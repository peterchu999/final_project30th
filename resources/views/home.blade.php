@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="{{asset('assets/logoW.png')}}" class="img-fluid" alt="">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @else
                        You are logged in!<br>
                        click here to go to dashoard
                    @endif
                    @if(Auth::user()->is_admin === null)
                    <a href="{{url('dashboard')}}" class="btn btn-primary m-2" role="button">dashboard</a>
                    @elseif(Auth::user()->is_admin === 1)
                    <a href="{{url('admin/dashboard')}}" class="btn btn-secondary m-2" role="button">Admin dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
