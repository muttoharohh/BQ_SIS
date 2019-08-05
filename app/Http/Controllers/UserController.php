<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup(){
        return view('signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'name'=>'required|min:4',
            'email'=>'email|required:users',
            'password'=>'required|min:6'
        ]);
        $users = new User([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ]);

        $users->save();

        Auth::login($users);
        if(Session::has('oldUrl')){
            $oldUrl==Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()-to($oldUrl);
        }

        return redirect('/');
    }

    public function getLogin(){
        return view('login');
    }

    public function postLogin (Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);

            if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
                if(Session::has('oldUrl')){
                    $oldUrl=Session::get('oldUrl');
                    Session::forget('oldUrl');
                    return redirect()->to($oldUrl);
                }
                // return redirect()->route('user.profile');
                return redirect('/');
            }
            return redirect()->back()->with('alert', 'Email atau Password anda salah');

    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
