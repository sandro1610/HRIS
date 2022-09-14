@extends('layouts.layout')
@section('title', 'Data Karyawan')
@section('style')
    <!-- MULAI STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
    <!-- AKHIR STYLE CSS -->
@endsection
@section('content')
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- MULAI TOMBOL TAMBAH -->
                <a href="/karyawan/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <br><br>
                <!-- AKHIR TOMBOL -->
                <!-- MULAI TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-lg" id="table_karyawan">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Posisi</th>
                                <th>Departemen</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Golongan Darah</th>
                                <th>No Handphone</th>
                                <th>No Rekening</th>
                                <th>Pendidikan</th>
                                <th>Tanggal Masuk</th>
                                <th>KTP</th>
                                <th>BPJS Ketenagakerjaan</th>
                                <th>BPJS Kesehatan</th>
                                <th>NPWP</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- AKHIR TABLE -->
            </div>
        </div>
    </div>
    
    <!-- AKHIR CONTAINER -->

@endsection
@section('script')
    <!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript"
        src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script type="text/javascript" language="javascript"
        src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


    <!-- AKHIR LIBARARY JS -->

    <!-- JAVASCRIPT -->
    <script>
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function() {
            $('#table_karyawan').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('manager.karyawan') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'nip',
                        name: 'nip'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'posisi',
                        name: 'posisi'
                    },
                    {
                        data: 'departemen',
                        name: 'departemen'
                    },
                    {
                        data: 'agama',
                        name: 'agama'
                    },
                    {
                        data: 'tempat_lahir',
                        name: 'tempat_lahir'
                    },
                    {
                        data: 'tgl_lahir',
                        name: 'tgl_lahir'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'gol_darah',
                        name: 'gol_darah'
                    },
                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },
                    {
                        data: 'no_rek',
                        name: 'no_rek'
                    },
                    {
                        data: 'pendidikan',
                        name: 'pendidikan'
                    },
                    {
                        data: 'tgl_masuk',
                        name: 'tgl_masuk'
                    },
                    {
                        data: 'ktp',
                        name: 'ktp'
                    },
                    {
                        data: 'bpjs_ketenagakerjaan',
                        name: 'bpjs_ketenagakerjaan'
                    },
                    {
                        data: 'bpjs_kesehatan',
                        name: 'bpjs_kesehatan'
                    },
                    {
                        data: 'npwp',
                        name: 'npwp'
                    }
                ],
                order: []
            });
        });
    </script>
@endsection
