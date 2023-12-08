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
            <form action="{{route('paket.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="alert alert-info">
                        <b>Create Paket</b>
                    </div>
                    <div class="form-group">
                        <label for="genre">Outlet</label>
                        <select name="outlet_id" id="genre" class="form-control">
                        <option disabled selected>-- Pilih Salah Satu--</option>
                        @forelse ($outlets as $outlet)
                            <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                        @empty
                            <option>--- Data Outlet kosong ---</option>
                        @endforelse
                        </select>
                        <label>Jenis</label>
                        <select class="form-control" name="jenis">
                            <option>kaos</option>
                            <option>kiloan</option>
                            <option>bed_cover</option>
                            <option>lainya</option>
                        </select>
                        
                        <label>Paket</label>
                        <select class="form-control" name="nama_paket">
                            <option>reguler</option>
                            <option>express</option>
                            <option>hemat</option>
                        </select>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
            </form>
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