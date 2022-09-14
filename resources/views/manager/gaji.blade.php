@extends('layouts.layout')
@section('title', 'Data Gaji')
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
                <a href="/gaji/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <br><br>
                <!-- AKHIR TOMBOL -->
                <!-- MULAI TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-lg" id="table_gaji">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Upah Perhari</th>
                                <th>Upah Lembur</th>
                                <th>Jaminan Kesehatan</th>
                                <th>Jaminan JHT</th>
                                <th>Jaminan JKK</th>
                                <th>Jaminan JKM</th>
                                <th>Jaminan JP</th>
                                <th>Tunjangan HM</th>
                                <th>Tunjangan kinerja</th>
                                <th>Uang saku</th>
                                <th>Tunjangan kehadiran</th>
                                <th>Tunjangan makan</th>
                                <th>Tunjangan field</th>
                                <th>Tunjangan komunikasi</th>
                                <th>Tunjangan unit</th>
                                <th>Kurang bayar</th>
                                <th>Iuran Kesehatan Karyawan</th>
                                <th>Iuran Kesehatan Perusahaan</th>
                                <th>Iuran Ketenagakerjaan Karyawan</th>
                                <th>Iuran Ketenagakerjaan Perusahaan</th>
                                <th>Iuran PPH 21</th>
                                <th>lebih bayar</th>
                                <th>unpaid</th>
                                <th>potongan koperasi</th>
                                <th>potongan lain lain</th>
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

    <script type="text/javascript" language="javascript" src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}">
    </script>

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
            $('#table_gaji').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('manager.gaji') }}",
                    type: 'GET'
                },
                columns: [
                    {
                        data: 'nip', 
                        name: 'nip'
                    },
                    {
                        data: 'nama', 
                        name: 'nama'
                    },
                    {
                        data: 'upah_pokok_bulan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'upah_pokok_bulan'
                    },
                    {
                        data: 'total_lembur',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'total_lembur'
                    },
                    {
                        data: 'bpjs_kesehatan_perusahaan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'bpjs_kesehatan_perusahaan'
                    },
                    {
                        data: 'bpjs_ketenagakerjaan_jht',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'bpjs_ketenagakerjaan_jht'
                    },
                    {
                        data: 'bpjs_ketenagakerjaan_jkk',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'bpjs_ketenagakerjaan_jkk'
                    },
                    {
                        data: 'bpjs_ketenagakerjaan_jkm',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'bpjs_ketenagakerjaan_jkm'
                    },
                    {
                        data: 'bpjs_ketenagakerjaan_jp',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'bpjs_ketenagakerjaan_jp'
                    },
                    {
                        data: 'tunjangan_HM',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_HM'
                    },
                    {
                        data: 'tunjangan_kinerja',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_kinerja'
                    },
                    {
                        data: 'uang_saku',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'uang_saku'
                    },
                    {
                        data: 'tunjangan_kehadiran',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_kehadiran'
                    },
                    {
                        data: 'tunjangan_makan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_makan'
                    },
                    {
                        data: 'tunjangan_field',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_field'
                    },
                    {
                        data: 'tunjangan_komunikasi',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_komunikasi'
                    },
                    {
                        data: 'tunjangan_unit',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'tunjangan_unit'
                    },
                    {
                        data: 'kurang_bayar',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'kurang_bayar'
                    },
                    {
                        data: 'iuran_bpjs_kesehatan_karyawan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'iuran_bpjs_kesehatan_karyawan'
                    },
                    {
                        data: 'iuran_bpjs_kesehatan_perusahaan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'iuran_bpjs_kesehatan_perusahaan'
                    },
                    {
                        data: 'iuran_bpjs_ketenagakerjaan_karyawan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'iuran_bpjs_ketenagakerjaan_karyawan'
                    },
                    {
                        data: 'iuran_bpjs_ketenagakerjaan_perusahaan',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'iuran_bpjs_ketenagakerjaan_perusahaan'
                    },
                    {
                        data: 'iuran_pph_21',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'iuran_pph_21'
                    },
                    {
                        data: 'lebih_bayar',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'lebih_bayar'
                    },
                    {
                        data: 'unpaid',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'unpaid'
                    },
                    {
                        data: 'potongan_koperasi',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'potongan_koperasi'
                    },
                    {
                        data: 'potongan_lain_lain',
                        render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ),
                        name: 'potongan_lain_lain'
                    },
                ],
                order: []
            });
        });
    </script>
@endsection
