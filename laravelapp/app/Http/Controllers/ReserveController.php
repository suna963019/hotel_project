<?php

namespace App\Http\Controllers;

use App\Models\Reserve as ModelsReserve;
use App\Models\Course as ModelsCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function index(Request $request)
    {
        $items = ModelsReserve::all();
        return view('reserve.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        $items = ModelsCourse::all();
        return view('reserve.add',['items' => $items]);
    }

    public function create(Request $request)
    {
        $user_id = Auth::id(); 
        $this->validate($request, ModelsReserve::$rules);
        $reserve = new ModelsReserve();
        $form = $request->all();
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/reserve/add');
    }
}
