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
                <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Gaji</a>
                &nbsp;
                <a href="/gaji/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <br><br>
                <!-- AKHIR TOMBOL -->
                <!-- MULAI TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-lg" id="table_gaji">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>NIP</th>
                                <th>Upah Pokok</th>
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

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <input type="hidden" name="id" id="id">

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
                                    <div class="form-group col-md-4">
                                        <label for="periode">Periode</label>
                                        <input type="text" class="form-control border border-dark" id="periode" name="periode"
                                            value="" required>
                                    </div>
                                </div>
                                <br>
                                <h3>Pendapatan Tidak Tetap</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_HM">Tunjangan HM</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_HM"
                                            name="tunjangan_HM" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_kinerja">Tunjangan Kinerja</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_kinerja"
                                            name="tunjangan_kinerja" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="uang_saku">Uang Saku</label>
                                        <input type="number" class="form-control border border-dark" id="uang_saku"
                                            name="uang_saku" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_kehadiran">Tunjangan Kehadiran</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_kehadiran"
                                            name="tunjangan_kehadiran" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_makan">Tunjangan Makan</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_makan"
                                            name="tunjangan_makan" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_field">Tunjangan Field</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_field"
                                            name="tunjangan_field" value="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_komunikasi">Tunjangan Komunikasi</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_komunikasi"
                                            name="tunjangan_komunikasi" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tunjangan_unit">Tunjangan Unit</label>
                                        <input type="number" class="form-control border border-dark" id="tunjangan_unit"
                                            name="tunjangan_unit" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="kurang_bayar">Kurang Bayar</label>
                                        <input type="number" class="form-control border border-dark" id="kurang_bayar"
                                            name="kurang_bayar" value="" required>
                                    </div>
                                </div>
                                <br>
                                <h3>Iuran </h3>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="unpaid">Kesehatan Karyawan</label>
                                        <input type="number" class="form-control border border-dark" id="unpaid"
                                            name="unpaid" value="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="lebih_bayar">Lebih Bayar</label>
                                        <input type="number" class="form-control border border-dark" id="lebih_bayar" name="lebih_bayar"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="potongan_koperasi">Ketenagakerjaan Karyawan</label>
                                        <input type="number" class="form-control border border-dark"
                                            id="potongan_koperasi"
                                            name="potongan_koperasi" value="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label
                                            for="potongan_lain_lain">Ketenagakerjaan Perusahaan</label>
                                        <input type="number" class="form-control border border-dark"
                                            id="potongan_lain_lain"
                                            name="potongan_lain_lain" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->

    <!-- MULAI MODAL KONFIRMASI DELETE-->

    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Gaji maka</b></p>
                    <p>*data produk tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div>

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
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function() {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Gaji Baru"); //valuenya tambah Gaji baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function() {
            $('#table_gaji').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('gaji.index') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'nip', 
                        name: 'nip'
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


        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function(form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('gaji.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function(data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_gaji').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                                                                                                                                                success ') }}',
                                position: 'bottomRight'
                            });
                        },
                        error: function(data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }
        //TOMBOL EDIT DATA PER GAJI DAN TAMPIKAN DATA BERDASARKAN ID GAJI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function() {
            var data_id = $(this).data('id');
            $.get('gaji/' + data_id + '/edit', function(data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                $('#nip').val(data.nip);
                $('#periode').val(data.periode);
                $('#tunjangan_HM').val(data.tunjangan_HM);
                $('#tunjangan_kinerja').val(data.tunjangan_kinerja);
                $('#uang_saku').val(data.uang_saku);
                $('#tunjangan_kehadiran').val(data.tunjangan_kehadiran);
                $('#tunjangan_makan').val(data.tunjangan_makan);
                $('#tunjangan_field').val(data.tunjangan_field);
                $('#tunjangan_komunikasi').val(data.tunjangan_komunikasi);
                $('#tunjangan_unit').val(data.tunjangan_unit);
                $('#kurang_bayar').val(data.kurang_bayar);
                $('#lebih_bayar').val(data.lebih_bayar);
                $('#unpaid').val(data.unpaid);
                $('#potongan_koperasi').val(data.potongan_koperasi);
                $('#potongan_lain_lain').val(data.potongan_lain_lain);
                })
        });
        
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function() {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function() {
            $.ajax({
                url: "gaji/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function() {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function(data) { //jika sukses
                    setTimeout(function() {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_gaji').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                                                                                                                        delete ') }}',
                        position: 'bottomRight'
                    });
                }
            })
        });
    </script>
@endsection
