<?php

namespace App\Http\Controllers;

use App\Models\Reserve as ModelsReserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function add(Request $request)
    {
        return view('reserve.add');
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
