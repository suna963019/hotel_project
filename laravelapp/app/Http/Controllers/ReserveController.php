<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reserve as ModelsReserve;
use App\Models\Course as ModelsCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $items = ModelsReserve::where('user_id', $user_id)->get();
        return view('reserve.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $items = ModelsCourse::all();
        return view('reserve.add', ['items' => $items]);
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

    public function delete(Request $request)
    {
        $reserve = ModelsReserve::where('id', $request->id)->first();
        return view('reserve.del', ['form' => $reserve]);
    }

    public function remove(Request $request)
    {
        ModelsReserve::find($request->id)->delete();
        return redirect('/reserve/index');
    }
}
