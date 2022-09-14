@extends('layouts.layout')
@section('title', 'Dashboard')
@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
@endsection
@section('content')
    {{-- Card Bawah --}}
    <div class="col-lg-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header flex-wrap border-0 pb-0">
                        <h1 class="text-black fs-20 mb-3">Cetak Slip Gaji Karyawan</h1>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <form method="POST" action="{{ route('Cetak_PDF_slip') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="nip">NIP</label>
                                            <select class="selectpicker form-control border border-dark" size="5" id="nip"
                                                name="nip" data-live-search="true">
                                                @foreach ($karyawans as $k)
                                                    <option value="{{ $k->nip }}" data-tokens="({{ $k->nip }}){{ $k->nama }}">({{ $k->nip }}){{ $k->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="periode">Periode</label>
                                            <input type="text" class="form-control border border-dark" id="periode" name="periode"
                                                value="" required>
                                        </div>
                                        <div class="col-md-1">
                                            <label for=""></label>
                                            <button type="submit" class="btn btn-primary">Cetak</button>
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
