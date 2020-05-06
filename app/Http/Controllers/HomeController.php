<?php

namespace App\Http\Controllers;

use App\ZonesModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getDataAddingPage() {
        return view('data.add');
    }

    public function AddData(Request $request)
    {
        // dd($request->all());
        $model = new ZonesModel($request->all());
        $model->save();
        if($model) {
            $message = 'Data added successfully!';
        }
        else {
            $message = 'Error!';
        }
        return view('data.add')->with('message', $message);
    }

    public function viewData(Request $request)
    {
        $model = new ZonesModel();
        $data = $model::all();

        if($request->ajax()){
            return response()->json(['data' => $data]);
        }

        return view('data.view')->with('data', $data);
    }

    public function deleteData($id)
    {
        $model = new ZonesModel();
        $data = $model::findorfail($id);
        $data->delete();
        return redirect()->route('view-data');
    }

    public function editDataPage($id)
    {
        $model = new ZonesModel();
        $data = $model::findorfail($id);
        return view('data.edit')->with('data', $data);
    }

    public function editData(Request $request)
    {
        // dd($request->all());
        $model = new ZonesModel();
        $data = $model::findorfail($request->id);
        $data->district = $request->district;
        $data->zone = $request->zone;
        $data->state = $request->state;
        $data->save();
        return redirect()->route('view-data');
    }
}
