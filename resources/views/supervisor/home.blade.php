@extends('layouts.layout')
@section('title', 'Dashboard')
@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
@endsection
@section('content')
{{-- Card Atas --}}
<div class="col-lg-12">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header flex-wrap border-0 pb-0">
                    <h1 class="text-black fs-20 mb-3">Selamat Datang Di Human Resource Information System PT. Bukit Asam Kreatif</h1>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir Card Atas --}}

    {{-- Card Bawah --}}
    <div class="col-lg-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header flex-wrap border-0 pb-0">
                        <h1 class="text-black fs-20 mb-3">Jumlah Karyawan</h1>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-lg-0 mb-4 text-center">
                                <h3>{{$jml_karyawan}}</h3>
                                <h2>Orang</h2>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center mb-sm-0 mb-3">
                                                <div>
                                                    <h4 class="fs-18 text-black">Karyawan Aktif</h4>
                                                    <span><h3>{{ $karyawan_aktif }}</h3></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center mb-sm-0 mb-3">
                                                <div>
                                                    <h4 class="fs-18 text-black">Karyawan Tidak Aktif</h4>
                                                    <span><h3>{{ $karyawan_tidak_aktif }}</h3></span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir Card Bawah --}}

    {{-- Tabel --}}

    {{-- Akhir Tabel --}}
@endsection
@section('script')
    <script type="text/javascript" language="javascript"
        src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="./vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/workout-statistic.js"></script>

@endsection
