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
                <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Karyawan</a>
                &nbsp;
                <a href="/karyawan/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <br><br>
                <!-- AKHIR TOMBOL -->
                <!-- MULAI TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-lg" id="table_karyawan">
                        <thead>
                            <tr>
                                <th>Aksi</th>
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
                                <h3>Data Karyawan</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="nip">NIP</label>
                                      <input type="text" class="form-control border border-dark" id="nip" name="nip" value="" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control border border-dark" id="nama" name="nama" value="" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ktp">KTP</label>
                                        <input type="text" class="form-control border border-dark" id="ktp" name="ktp" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="no_rek">No Rekening</label>
                                      <input type="text" class="form-control border border-dark" id="no_rek" name="no_rek" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control border border-dark" id="pendidikan" name="pendidikan" value="" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-8">
                                      <label for="alamat">Alamat</label>
                                      <input type="text" class="form-control border border-dark" id="alamat" name="alamat" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="date" class="form-control border border-dark" id="tgl_masuk" name="tgl_masuk" value="" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" class="form-control border border-dark" id="posisi" name="posisi" value="" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="departemen">Departemen</label>
                                    <input type="text" class="form-control border border-dark" id="departemen" name="departemen" value="" required>
                                  </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="tempat_lahir">Tempat Lahir</label>
                                      <input type="text" class="form-control border border-dark" id="tempat_lahir" name="tempat_lahir" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="tgl_lahir">Tanggal Lahir</label>
                                      <input type="date" class="form-control border border-dark" id="tgl_lahir" name="tgl_lahir" value="" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="status">Status</label>
                                        <select class="form-control border border-dark" id="status" name="status">
                                          <option selected value="Aktif">Aktif</option>
                                          <option value="Tidak Aktif">Tidak Aktif</option>
                                      </select> 
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="agama">Agama</label>
                                      <select class="form-control border border-dark" id="agama" name="agama">
                                        <option selected disabled value="Aktif">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select> 
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="no_hp">No Handphone</label>
                                      <input type="text" class="form-control border border-dark" id="no_hp" name="no_hp" value="" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="gol_darah">Gol Darah</label>
                                      <input type="text" class="form-control border border-dark" id="gol_darah" name="gol_darah" value="" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="npwp">No NPWP</label>
                                      <input type="text" class="form-control border border-dark" id="npwp" name="npwp" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="bpjs_ketenagakerjaan">BPJS Ketenagakerjaan</label>
                                      <input type="text" class="form-control border border-dark" id="bpjs_ketenagakerjaan" name="bpjs_ketenagakerjaan" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="bpjs_kesehatan">BPJS Kesehatan</label>
                                        <input type="text" class="form-control border border-dark" id="bpjs_kesehatan" name="bpjs_kesehatan" value="" required>
                                    </div>
                                  </div>
                                  <h3>Data Payroll</h3>
                                  <div class="form-row">
                                      <div class="form-group col-md-4">
                                        <label for="upah_pokok">Upah Pokok</label>
                                        <input type="number" class="form-control border border-dark" id="upah_pokok" name="upah_pokok"
                                            value="">
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="lembur">Upah Lembur</label>
                                          <input type="number" class="form-control border border-dark" id="lembur"
                                              name="lembur" value="">
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="pph_21">PPH 21</label>
                                          <input type="number" class="form-control border border-dark" id="pph_21"
                                              name="pph_21" value="">
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
                    <p><b>Jika menghapus Retur maka</b></p>
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
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function() {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Karyawan Baru"); //valuenya tambah karyawan baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function() {
            $('#table_karyawan').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('karyawan.index') }}",
                    type: 'GET'
                },
                columns: [
                    {
                        data: 'action',
                        name: 'action'
                    },{
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
                        url: "{{ route('karyawan.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function(data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_karyawan').dataTable(); //inialisasi datatable
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
        //TOMBOL EDIT DATA PER KARYAWAN DAN TAMPIKAN DATA BERDASARKAN ID KARYAWAN KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function() {
            var data_id = $(this).data('id');
            $.get('karyawan/' + data_id + '/edit', function(data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                $('#nip').val(data.nip);
                $('#nama').val(data.nama);
                $('#status').val(data.status);
                $('#posisi').val(data.posisi);
                $('#departemen').val(data.departemen);
                $('#agama').val(data.agama);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#tgl_lahir').val(data.tgl_lahir);
                $('#alamat').val(data.alamat);
                $('#gol_darah').val(data.gol_darah);
                $('#no_hp').val(data.no_hp);
                $('#no_rek').val(data.no_rek);
                $('#pendidikan').val(data.pendidikan);
                $('#tgl_masuk').val(data.tgl_masuk);
                $('#ktp').val(data.ktp);
                $('#bpjs_ketenagakerjaan').val(data.bpjs_ketenagakerjaan);
                $('#npwp').val(data.npwp);
                $('#bpjs_kesehatan').val(data.bpjs_kesehatan);
                $('#upah_pokok').val(data.upah_pokok);
                $('#lembur').val(data.lembur);
                $('#pph_21').val(data.pph_21);
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
                url: "karyawan/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function() {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function(data) { //jika sukses
                    setTimeout(function() {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_karyawan').dataTable();
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
