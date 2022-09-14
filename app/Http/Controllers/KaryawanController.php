<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
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
        $karyawans = Karyawan::select('karyawans.*')->get();
        if($request->ajax()){
            return datatables()->of($karyawans)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('admin.karyawan');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manager(Request $request)
    {
        $karyawans = Karyawan::select('karyawans.*')->get();
        if($request->ajax()){
            return datatables()->of($karyawans)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('manager.karyawan');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function supervisor(Request $request)
    {
        $karyawans = Karyawan::select('karyawans.*')->get();
        if($request->ajax()){
            return datatables()->of($karyawans)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post">Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('supervisor.karyawan');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        $nip = Auth::user()->nip;
        $karyawan = Karyawan::where('nip', $nip)->get();

        return view('user.karyawan', [ 'karyawan' => $karyawan]);
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
        
        $post   =   Karyawan::updateOrCreate(['id' => $id],
                    [
                        'nip' => $request->nip,
                        'nama' => $request->nama,
                        'posisi' => $request->posisi,
                        'status' => $request->status,
                        'tgl_lahir' => $request->tgl_lahir,
                        'tgl_masuk' => $request->tgl_masuk,
                        'pendidikan' => $request->pendidikan,
                        'ktp' => $request->ktp,
                        'npwp' => $request->npwp,
                        'no_hp' => $request->no_hp,
                        'no_rek' => $request->no_rek,
                        'alamat' => $request->alamat,
                        'departemen' => $request->departemen,
                        'tempat_lahir' => $request->tempat_lahir,
                        'agama' => $request->agama,
                        'gol_darah' => $request->gol_darah,
                        'bpjs_ketenagakerjaan' => $request->bpjs_ketenagakerjaan,
                        'bpjs_kesehatan' => $request->bpjs_kesehatan,
                        'upah_pokok' => $request->upah_pokok,
                        'lembur' => $request->lembur,
                        'pph_21' => $request->pph_21,
                    ]); 

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $post  = Karyawan::where($where)->first();
     
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
        $post = Karyawan::where('id',$id)->delete();
     
        return response()->json($post);
    }

    public function cetak_pdf()
    {
    	$karyawan = Karyawan::all();

    	$pdf = PDF::loadview('cetakKaryawan',['karyawan'=>$karyawan])->setPaper('a4', 'landscape');;
    	return $pdf->stream();
    }
}
