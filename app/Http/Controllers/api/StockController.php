<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\motors;
use App\Models\mobils;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $getmotor = new motors;
        $getmobil = new mobils;

        if( !isset($request->cat) ){

            // jika kategori tidak ditentukan
            $stock = [
                'motor'     =>  [
                    'total'     =>  $getmotor->count(),
                    'list'      =>  $getmotor->get()
                ],
                'mobil'     =>  [
                    'total'     =>  $getmobil->count(),
                    'list'      =>  $getmobil->get()
                ]
            ];

            
        }
        else{

            if( trim($request->cat) == '1'){

                // jika kategori 1 atau motor
                $stock  =   [
                    'motor'     =>  [
                        'total'     =>  $getmotor->count(),
                        'list'      =>  $getmotor->get()
                    ]
                ];
            }
            else{

                // jika kategori 2 atau mobil
                $stock  =   [
                    'mobil'     =>  [
                        'total'     =>  $getmobil->count(),
                        'list'      =>  $getmobil->get()
                    ]
                ];
            }
        }


        $data = [
            'message'   =>  '',
            'data'      =>  $stock
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
        //
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
