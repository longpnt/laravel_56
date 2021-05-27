<?php

namespace App\Http\Controllers;


use App\HocSinh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Query\Builder;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected function getList()
    {
        $list = DB::table('hocsinh')
                ->where('isDeleted', 0)
                ->get();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');
        return response()->json($list);
    }
}