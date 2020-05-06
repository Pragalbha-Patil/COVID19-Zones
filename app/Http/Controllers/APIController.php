<?php

namespace App\Http\Controllers;

use App\ZonesModel;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getJSONData(Request $request)
    {
        $model = new ZonesModel();
        $data = $model::all();

        return response()->json($data);
    }

    public function getMap()
    {
        return view('generated.index');
    }
}
