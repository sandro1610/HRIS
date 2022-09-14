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
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
                                @foreach ($karyawan as $k)
                                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$k -> id}}" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="nip">NIP</label>
                                      <input type="text" class="form-control border border-dark" id="nip" name="nip" value="{{$k->nip}}" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control border border-dark" id="nama" name="nama" value="{{$k->nama}}" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ktp">KTP</label>
                                        <input type="text" class="form-control border border-dark" id="ktp" name="ktp" value="{{$k->ktp}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="no_rek">No Rekening</label>
                                      <input type="text" class="form-control border border-dark" id="no_rek" name="no_rek" value="{{$k->no_rek}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control border border-dark" id="pendidikan" name="pendidikan" value="{{$k->pendidikan}}" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-8">
                                      <label for="alamat">Alamat</label>
                                      <input type="text" class="form-control border border-dark" id="alamat" name="alamat" value="{{$k->alamat}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tgl_masuk">Tanggal Masuk</label>
                                        <input type="date" class="form-control border border-dark" id="tgl_masuk" name="tgl_masuk" value="{{$k->tgl_masuk}}" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" class="form-control border border-dark" id="posisi" name="posisi" value="{{$k->posisi}}" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="departemen">Departemen</label>
                                    <input type="text" class="form-control border border-dark" id="departemen" name="departemen" value="{{$k->departemen}}" required>
                                  </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="tempat_lahir">Tempat Lahir</label>
                                      <input type="text" class="form-control border border-dark" id="tempat_lahir" name="tempat_lahir" value="{{$k->tempat_lahir}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="tgl_lahir">Tanggal Lahir</label>
                                      <input type="date" class="form-control border border-dark" id="tgl_lahir" name="tgl_lahir" value="{{$k->tgl_lahir}}" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control border border-dark" id="status" name="status" value="{{$k->status}}" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="agama">Agama</label>
                                      <input type="text" class="form-control border border-dark" id="agama" name="agama" value="{{$k->agama}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="no_hp">No Handphone</label>
                                      <input type="text" class="form-control border border-dark" id="no_hp" name="no_hp" value="{{$k->no_hp}}" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="gol_darah">Gol Darah</label>
                                      <input type="text" class="form-control border border-dark" id="gol_darah" name="gol_darah" value="{{$k->gol_darah}}" required>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="npwp">No NPWP</label>
                                      <input type="text" class="form-control border border-dark" id="npwp" name="npwp" value="{{$k->npwp}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="bpjs_ketenagakerjaan">BPJS Ketenagakerjaan</label>
                                      <input type="text" class="form-control border border-dark" id="bpjs_ketenagakerjaan" name="bpjs_ketenagakerjaan" value="{{$k->bpjs_ketenagakerjaan}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="bpjs_kesehatan">BPJS Kesehatan</label>
                                        <input type="text" class="form-control border border-dark" id="bpjs_kesehatan" name="bpjs_kesehatan" value="{{$k->bpjs_kesehatan}}" required>
                                    </div>
                                  </div>
                                  <h3>Data Payroll</h3>
                                  <div class="form-row">
                                      <div class="form-group col-md-4">
                                        <label for="upah_pokok">Upah Pokok</label>
                                        <input type="number" class="form-control border border-dark" id="upah_pokok" name="upah_pokok"
                                            value="{{$k->upah_pokok}}">
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="lembur">Upah Lembur</label>
                                          <input type="number" class="form-control border border-dark" id="lembur"
                                              name="lembur" value="{{$k->lembur}}">
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="pph_21">PPH 21</label>
                                          <input type="number" class="form-control border border-dark" id="pph_21"
                                              name="pph_21" value="{{$k->pph_21}}">
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir Card Atas --}}

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

    <script>
        
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
    </script>

@endsection
