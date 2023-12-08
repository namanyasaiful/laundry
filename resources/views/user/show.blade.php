@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Ecommerce Dashboard &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('template/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('template/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('template/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/components.min.css') }}">
@stack('css')
</head>

<div class="main-content" style="min-height: 659px;">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Show Data User</h4>
            </div>
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" value="{{ $user[0]->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $user[0]->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Ussername</label>
                        <input type="text" name="ussername" class="form-control" value="{{ $user[0]->ussername }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="{{ $user[0]->password }}" disabled>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <a class="btn btn-danger" href="{{route('user.index')}}">kembali</a>
                </div>
        </div>
    </section>
</div>
@endsection

<script src="{{ asset('template/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('template/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('template/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('template/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('template/js/page/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('template/js/scripts.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>
@stack('script')