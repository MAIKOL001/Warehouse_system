<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $stocks = DB::table('stocks')

            ->get();

        return json_encode($stocks);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'warehouse_id' => 'required',
            'quality_pass' => 'required',
            'quality_fail' => 'required',
            'bin_id' => 'required',
            'quantity' => 'required',
            'merchant_id' => 'required',

        ]);

        $stock_create = Stock::create([
            'warehouse_id' => $request->warehouse_id,
            'name' => $request->name,
            'category' => $request->category,
            'quality_pass' => $request->quality_pass,
            'quality_fail' => $request->quality_fail,
            'bin_id' => $request->bin_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'merchant_id' => $request->merchant_id,
            'causer_id' => $request->causer_id,

        ]);

        if ($stock_create) {

            $response = [
                'success' => 1,
                'redirect' => '/merchant',
            ];


            return json_encode($response);

        } else {

            $response = [
                'success' => 0,
            ];
            return json_encode($response);
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
