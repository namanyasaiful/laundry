@extends('layout.master')
@section('content')

<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
@stack('css')

<div class="main-content" style="min-height: 659px;">
    <section class="section">
        <div class="section-header">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah User</h4>
                        </div>
                        <div class="card-body">
                            <p>{{$jumlah_user}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Member</h4>
                        </div>
                        <div class="card-body">
                            <p>{{$jumlah_member}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Outlet</h4>
                        </div>
                        <div class="card-body">
                            <p>{{$jumlah_outlet}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Transaksi</h4>
                        </div>
                        <div class="card-body">
                            {{$jumlah_transaksi}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @can('Admin')
        <h1>Menu</h1>
        <div class="section-content">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="wizard-steps">
                        <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="wizard-step-label">
                            <label for="user">User</label>
                            <br>
                            <a href="/user" class="btn btn-icon icon-left btn-info">Klik</a>
                        </div>
                        </div>
                        <div class="wizard-step wizard-step-danger">
                        <div class="wizard-step-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="wizard-step-label">
                            <label for="Member">Member</label>
                            <br>
                            <a href="/member" class="btn btn-icon icon-left btn-info">Klik</a>
                        </div>
                        </div>
                        <div class="wizard-step wizard-step-warning">
                        <div class="wizard-step-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <div class="wizard-step-label">
                            <label for="outlet">Outlet</label>
                            <br>
                            <a href="/outlet" class="btn btn-icon icon-left btn-info">klik</a>
                        </div>
                        </div>
                        <div class="wizard-step wizard-step-success">
                        <div class="wizard-step-icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <div class="wizard-step-label">
                            <label for="transaksi">Transaksi</label>
                            <a href="/transaksi" class="btn btn-icon icon-left btn-info">Klik</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endcan
        </div> 
    </section>
</div>
@endsection