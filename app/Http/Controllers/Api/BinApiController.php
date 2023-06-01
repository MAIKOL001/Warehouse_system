<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Bin;

class BinApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $bins = DB::table('bins')
        ->latest()
        ->get();
    return json_encode($bins);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request)
    {
        //Check if bin id exists
        $name_check = DB::table('bins')->where('bin_code', $request->name)->first();
        if ($name_check) {

            $json_array = array(
                'success' => 3,
                'message' => "Bin code already exists",
            );

            $response = $json_array;
            return json_encode($response);
        }

        $bin_object = new Bin();
        $bin_created = $bin_object->create([
            'bin_code' => $request->bin_code,
            'capacity' => $request->capacity,
            'status' => $request->status,
            'admin_id' => $request->admin_id,
        ]);

        if ($bin_created) {

            $json_array = [
                'success' => 1,
                'message' => 'Bin created successfully!',
                'redirect' => '/bin'
            ];

            $response = $json_array;
            return json_encode($response);

        } else {

            $json_array = array(
                'success' => 0,
            );

            $response = $json_array;
            return json_encode($response);
        }
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
