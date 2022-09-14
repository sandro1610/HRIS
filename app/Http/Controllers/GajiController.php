<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Gaji;
use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $karyawans = Karyawan::all();
        $gajis = Gaji::select('gajis.*')->get();
        if($request->ajax()){
            return datatables()->of($gajis)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('admin.gaji',['karyawans' => $karyawans]);
    }

    

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function supervisor(Request $request)
    {
        $karyawans = Karyawan::all();
        $gajis = Gaji::select('gajis.*')->get();
        if($request->ajax()){
            return datatables()->of($gajis)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('supervisor.gaji',['karyawans' => $karyawans]);
    }


    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manager(Request $request)
    {
        $karyawans = Karyawan::all();
    	$gajis = Gaji::LeftJoin("karyawans", function ($join) {
            $join->on("karyawans.nip", "=", "gajis.nip");
            })->select('gajis.*', 'karyawans.nama', 'karyawans.no_rek')->orderBy('created_at', 'desc')->get();
        if($request->ajax()){
            return datatables()->of($gajis)
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('manager.gaji',['karyawans' => $karyawans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $nip = $request->nip;
        $periode = $request->periode;
        $karyawan = Karyawan::where('nip', $nip)->get();
        $absen = Absen::where('nip', $nip,)->where('periode', $periode,)->get();
        $upah_pokok_bulan = $karyawan[0]->upah_pokok;
        $upah_lembur = $karyawan[0]->lembur;
        $jumlah_lembur = $absen[0]->jumlah_lembur;
        $total_lembur = $upah_lembur*$jumlah_lembur; 
        $bpjs_kesehatan_perusahaan = $upah_pokok_bulan*0.04;
        $bpjs_ketenagakerjaan_jht = $upah_pokok_bulan*0.037;
        $bpjs_ketenagakerjaan_jkk = $upah_pokok_bulan*0.0174;
        $bpjs_ketenagakerjaan_jkm = $upah_pokok_bulan*0.003;
        $bpjs_ketenagakerjaan_jp = $upah_pokok_bulan*0.02;
        $iuran_bpjs_kesehatan_karyawan = $upah_pokok_bulan*0.01;
        $iuran_bpjs_kesehatan_perusahaan = $upah_pokok_bulan*0.04;
        $iuran_bpjs_ketenagakerjaan_karyawan = $upah_pokok_bulan*0.03;
        $iuran_bpjs_ketenagakerjaan_perusahaan = $upah_pokok_bulan*0.0774;
        $iuran_pph_21 = $karyawan[0]->pph_21;  
        $post   =   Gaji::updateOrCreate(['id' => $id],
                    [
                        'nip'=> $request->nip,
                        'periode'=> $request->periode,
                        'tunjangan_HM'=> $request->tunjangan_HM,
                        'tunjangan_kinerja'=> $request->tunjangan_kinerja,
                        'uang_saku'=> $request->uang_saku,
                        'tunjangan_kehadiran'=> $request->tunjangan_kehadiran,
                        'tunjangan_makan'=> $request->tunjangan_makan,
                        'tunjangan_field'=> $request->tunjangan_field,
                        'tunjangan_komunikasi'=> $request->tunjangan_komunikasi,
                        'tunjangan_unit'=> $request->tunjangan_unit,
                        'kurang_bayar'=> $request->kurang_bayar,
                        'lebih_bayar'=> $request->lebih_bayar,
                        'unpaid'=> $request->unpaid,
                        'potongan_koperasi'=> $request->potongan_koperasi,
                        'potongan_lain_lain'=> $request->potongan_lain_lain,
                        'upah_pokok_bulan'=> $upah_pokok_bulan,
                        'bpjs_kesehatan_perusahaan'=> $bpjs_kesehatan_perusahaan,
                        'bpjs_ketenagakerjaan_jht'=> $bpjs_ketenagakerjaan_jht,
                        'bpjs_ketenagakerjaan_jkk'=> $bpjs_ketenagakerjaan_jkk,
                        'bpjs_ketenagakerjaan_jkm'=> $bpjs_ketenagakerjaan_jkm,
                        'bpjs_ketenagakerjaan_jp'=> $bpjs_ketenagakerjaan_jp,
                        'total_lembur'=> $total_lembur,
                        'iuran_bpjs_kesehatan_karyawan'=> $iuran_bpjs_kesehatan_karyawan,
                        'iuran_bpjs_kesehatan_perusahaan'=> $iuran_bpjs_kesehatan_perusahaan,
                        'iuran_bpjs_ketenagakerjaan_karyawan'=> $iuran_bpjs_ketenagakerjaan_karyawan,
                        'iuran_bpjs_ketenagakerjaan_perusahaan'=> $iuran_bpjs_ketenagakerjaan_perusahaan,
                        'iuran_pph_21'=> $iuran_pph_21,
                    ]); 

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slip()
    {
        $karyawans = Karyawan::all();
        return view('admin.slip', ['karyawans' => $karyawans]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slip_supervisor()
    {
        $karyawans = Karyawan::all();
        return view('supervisor.slip', ['karyawans' => $karyawans]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_slip()
    {
        return view('user.slip');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Gaji::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Gaji::where('id',$id)->delete();
     
        return response()->json($post);
    }

    public function cetak_pdf()
    {
    	$gajis = Gaji::LeftJoin("karyawans", function ($join) {
            $join->on("karyawans.nip", "=", "gajis.nip");
            })->select('gajis.*', 'karyawans.nama', 'karyawans.no_rek')->orderBy('created_at', 'desc')->get();

    	$pdf = PDF::loadview('cetakGaji',['gajis'=>$gajis]);
    	return $pdf->stream();
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cetak_slip(Request $request)
    {
        $nip = $request->nip;
        $periode = $request->periode;
    	$gajis = Gaji::LeftJoin("karyawans", function ($join) {
            $join->on("karyawans.nip", "=", "gajis.nip");
            })->select('gajis.*', 'karyawans.nama', 'karyawans.posisi', 'karyawans.departemen', 'karyawans.no_rek')
              ->orderBy('created_at', 'desc')
              ->where('gajis.nip', $nip)
              ->where('gajis.periode', $periode)
              ->get();
        
    	$pdf = PDF::loadview('cetakSlip',['gajis'=>$gajis])->setPaper('a4', 'potrait');
    	return $pdf->stream();
    }
}
