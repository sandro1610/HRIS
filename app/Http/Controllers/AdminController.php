<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
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
        $users = User::select('users.*')->get();
        if($request->ajax()){
            return datatables()->of($users)
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
        return view('admin.dashboard',['karyawans' => $karyawans]);
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
        $users = User::select('users.*')->get();
        if($request->ajax()){
            return datatables()->of($users)
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
        return view('manager.dashboard',['karyawans' => $karyawans]);
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
        $jumlah_hari_kerja = $request->shift1 + $request->shift2 + $request->tr;
        
        $post   =   User::updateOrCreate(['id' => $id],
                    [
                        'nip'=> $request->nip,
                        'periode'=> $request->periode,
                        'shift1'=> $request->shift1,
                        'shift2'=> $request->shift2,
                        'telat'=> $request->telat,
                        'stb'=> $request->stb,
                        'tr'=> $request->tr,
                        'jumlah_lembur'=> $request->jumlah_lembur,
                        'jumlah_hari_kerja'=> $jumlah_hari_kerja,
                    ]); 

        return response()->json($post);
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
        $post  = User::where($where)->first();
     
        return response()->json($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = User::where('id',$id)->delete();
     
        return response()->json($post);
    }
    
    public function cetak_pdf()
    {
    	$users = User::all();

    	$pdf = PDF::loadview('cetakUser',['users'=>$users]);
    	return $pdf->stream();
    }
}
