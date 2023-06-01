<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $admins = DB::table('admins')

            ->orderBy('first_name', 'ASC')
            ->get();

        return json_encode($admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * e
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'role' => 'required',

        ]);
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone =$request->phone;
        $email = $request->email;
        $role =$request->role;


        //Check if phone exists
        $phone_number_check = DB::table('admins')->where('phone', $phone)->first();
        if ($phone_number_check) {

            $json_array = [
                'success' => 3,
                'message' => "Phone number already exist",
            ];

            $response = $json_array;
            return json_encode($response);
        }

        //Check if email exists
        if ($email != '') {
            $email_check = DB::table('admins')->where('email', $email)->first();
            if ($email_check) {

                $json_array = array(
                    'success' => 3,
                    'message' => "Email address already exist",
                );

                $response = $json_array;
                return json_encode($response);
            }
        }


        $admin_object = new Admin();
        $admin_created = $admin_object->create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'email' => $request->email,
            'role' => $role,
            'password' => bcrypt('password'),

        ]);

        if ($admin_created) {

            $json_array = [
                'success' => 1,
                'redirect' => '/admin'
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
