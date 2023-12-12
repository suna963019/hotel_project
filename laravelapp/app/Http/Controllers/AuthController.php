<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    //新規登録
    public function register(){
        return view('acount.register');
    }
    public function create(Request $request){
        $request->validate([
            'name'=>['required'],
            'tel'=>['required'],
            'email'=>['required'],
            'password'=>['required','confirmed'],
        ]);
        $other= User::where('email',$request->email)->first();
        if (!isEmpty($other)) {
            return redirect('/');
        }
        User::create(
            $request->only('name','tel','email','password')
        );
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/acount');
        }
        return redirect('/login');
    }
    //ログイン
    public function login(Request $request){
        return view('acount.login');
    }
    public function check(Request $request){
        if (Auth::attempt($request->only("email","password"))) {
            return redirect('/acount');
        }
        return redirect('/login');
    }
    //ログアウト
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    //会員情報表示
    public function index(){
        $items=Auth::user();
        return view('acount.index',['items'=>$items]);
    }
    //会員情報変更
    public function edit(){
        $items=Auth::user();
        return view('acount.edit',['items'=>$items]);
    }
    public function change(Request $request){
        $user=User::find(Auth::id());
        $user->name=$request->name;
        $user->tel=$request->tel;
        $user->email=$request->email;
        $user->save();
        return redirect('/acount');
    }
    //会員情報削除
    public function delete(){
        $items=Auth::user();
        return view('acount.delete',['items'=>$items]);
    }
    public function clear(Request $request){
        User::find(Auth::id())->delete();
        return redirect('/');
    }
}
