<?php


namespace App\Http\Controllers;

use App\Models\Bin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class binlistController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        $bins = DB::table('bins')
    ->latest()
    ->get();
        $bin_result = [];

        foreach ($bins as $bin){

            // Get stock count
            $stock_count = DB::table('stocks')
                ->where('bin_id', $bin->id)
                ->count();

            array_push($bin_result,
                [
                    'id' => $bin->id,
                    'bin_code' => $bin->bin_code,
                    'capacity' => $bin->capacity,
                    'stock_count' => $stock_count,
                    'status' => $bin->status,
                    'created_at' => $bin->created_at,
                    'updated_at' => $bin->updated_at,
                ]);

        }

    $data = [
        'bins' => $bin_result,
    ];
        return view('binlist',$data);
    }
}
