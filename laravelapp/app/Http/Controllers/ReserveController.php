<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function index()
    {
        $user_id = 1;
        // $user_id = Auth::id();
        $items = Reserve::where('user_id',$user_id)->get();
        return view('reserve.index', ['items' => $items]);
    }
}
