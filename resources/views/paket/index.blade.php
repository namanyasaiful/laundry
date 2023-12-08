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
<div class="main-content">
    <section class="section">
        <div class="card-header">
            <h4>Data Paket</h4>
            <div class="card-footer text-right">
                <a class="btn btn-info" href="{{route('paket.create')}}">Create Paket</a>
            </div>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md v_center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Outlet</th>
                                <th>Jenis</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($paket as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->outlet->nama }}</td>
                            <td>{{ $value->jenis }}</td>
                            <td>{{ $value->nama_paket }}</td>
                            <td>{{ $value->harga }}</td>
                            <td>
                                <form action="{{ route('outlet.destroy' , $value->id) }}" method="POST"  accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td>Data Masih Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-left">
                    <a class="btn btn-danger" href="{{route('dashboard')}}">kembali</a>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
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