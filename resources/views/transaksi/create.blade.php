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
            <form action="{{route('transaksi.store')}}" method="POST">
                @csrf
                    <div class="alert alert-info">
                        <b>Transaksi</b>
                    </div>
                        <div class="form-group">
                            <label for="genre">Outlet</label>
                            <select name="outlet_id" id="genre" class="form-control">
                            <option disabled selected>-- Pilih Salah Satu--</option>
                            @forelse ($outlet as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @empty
                                <option>--- Data Outlet kosong ---</option>
                            @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="genre">Paket</label>
                            <select name="paket_id" id="genre" class="form-control">
                            <option disabled selected>-- Pilih Salah Satu--</option>
                            @forelse ($paket as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_paket }}</option>
                            @empty
                                <option>--- Data Paket kosong ---</option>
                            @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="genre">Member</label>
                            <select name="member_id" id="genre" class="form-control isian">
                            <option disabled selected>-- Pilih Salah Satu--</option>
                            @forelse ($member as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @empty
                                <option>--- Data Member kosong ---</option>
                            @endforelse
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal Masuk</label>
                            <input type="date" name="tgl" id="tgl" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>baru</option>
                                <option>proses</option>
                                <option>selesai</option>
                                <option>diambil</option>
                            </select>
                            <br>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control" name="keterangan">
                                <option>lunas</option>
                                <option>belum lunas</option>
                                <option>sebagian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="selesai" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
            </div>
            </form>
        </div>
        <style>
            .isian {
    margin-bottom: 30px; /* Tambahkan margin bawah untuk memberikan ruang di antara elemen */
}
        </style>
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