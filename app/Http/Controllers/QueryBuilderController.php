<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = DB::table('studentmarks')->delete();
        // where('name','=','Unni')->delete();
        // updateOrInsert(
        //     [
        //         "id" => 4
        //     ],
        //     [
        //         "name" => "Shamnas",
        //         "age" => 43,
        //         "marks" => 55
        //     ]

        // );
        // ->where('name','=','Nimsha')->update(
        //     [
        //         "name" => "Unni",
        //         "age" => 22,
        //         "marks" => 45
        //     ]
        // );
        // where('age', '=', 22)->count();
        // min,max,sum
        // avg('marks');
        // where('age', '<', 24)->where('age', '>', 20)->get();
        dd($data);

        // [
        //     "name" => "Ammu",
        //     "age" => 24,
        //     "marks" => 50

        // ]

    }
}
