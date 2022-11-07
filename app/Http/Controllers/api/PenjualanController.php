<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kendaraan;
use Exception;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $getdata = new kendaraan;

        if( isset($request->cat) ){
            // jika kategori ditentukan
            $getdata = $getdata->where([
                'kategori'  =>  trim($request->cat)
            ]);
        }

        if( isset($request->year) ){
            // jika ditentukan tahun kendaraan
            $getdata = $getdata->where([
                'tahun'  =>  trim($request->year)
            ]);
        }

        $getdata = $getdata->get();


        if( blank($getdata)){
            // jika data tidak ditemukan

            $data = [
                'messaage'      =>  'Error',
                'data'          =>  null
            ];
            return response()->json($data, 400);
        }
        
        //jika data ditemukan
        $data = [
            'messaage'      =>  'Success',
            'data'          =>  $getdata
        ];
        return response()->json($data, 200);

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $request->validate([
                'kategori'      =>  'required',
                'tahun'         =>  'required',
                'warna'         =>  'required',
                'harga'         =>  'required'
            ]);

            $penjualan = kendaraan::create([
                'kategori'      =>  $request->kategori,
                'tahun'         =>  $request->tahun,
                'warna'         =>  $request->warna,
                'harga'         =>  $request->harga
            ]);

            if($penjualan)
            {
                return response()->json([
                    'message'       =>  'success'
                ],200);
            }


        }catch(Exception $error){

            return response()->json([
                'error'     =>  'Error Store'
            ],400);
        }
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
        //
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
        //
    }
}
