<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Merchant;

class MerchantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $merchants = DB::table('merchants')
            ->latest()
            ->get();

        return json_encode($merchants);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $phone =$request->phone;

        $name =$request->name;

           //Check if name exists
           $name_check = DB::table('merchants')->where('name', $name)->first();
           if ($name_check) {

               $json_array = [
                   'success' => 3,
                   'message' => "name already exist",
               ];

               $response = $json_array;
               return json_encode($response);
           }

        //Check if email exists
        if ($request->email != '') {
            $email_check = DB::table('merchants')->where('email', $request->email)->first();
            if ($email_check) {

                $json_array = array(
                    'success' => 3,
                    'message' => "Email address already exist",
                );

                $response = $json_array;
                return json_encode($response);
            }
        }


        $merchant_object = new Merchant();
        $merchant_created = $merchant_object->create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $phone,
            'email' => $request->email,
            'admin_id' => $request->admin_id,
        ]);

        if ($merchant_created) {

            $json_array = [
                'success' => 1,
                'redirect' => '/merchant'
            ];

            $response = $json_array;
            return json_encode($response);

        } else {

            $json_array = [
                'success' => 0,
            ];

            $response = $json_array;
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
