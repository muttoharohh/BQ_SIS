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

    public function edit($id){
        $users = \App\User::find($id);
        return view('admin.edit',['users' => $users]);
    }

    public function update(Request $request, $id){
        $users = \App\user::find($id);
        $users->update($request->all());
        return redirect()->route('admin.user');
    }

    public function delete($id){
        $users = \App\user::find($id);
        $users-> delete($id);
        return redirect()->route('admin.user');
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
    
    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.login');
    }

    public function postLogin (Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);

            if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
                if($request->input('email') == 'admin@gmail.com' && $request->input('password') == '123456'){
                    return redirect('/dashboard');
                }else{
                    return redirect()->route('user.login')->with('alert', 'Anda bukan admin!!!');
                }
                // return redirect()->route('user.profile');
            }
            return redirect()->back()->with('alert', 'Email atau Password anda salah');

    }
    public function getRegister(){
        return view('admin.register');
    }

    public function getUser(){
        $users = User::all();
        return view('admin.adminuser',['users' => $users]);
    }

    public function postRegister (Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);

        $users = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $users->save();

        return redirect()->route('register.admin')->with('success','User baru berhasil ditambahkan');

    }
    public function getLoginadmin(){
        return view('admin.loginadmin');
    }

    public function postLoginadmin (Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);

            if(Auth::attempt(['email' => $request->input('email'),'password'=>$request->input('password')])){
                if($request->input('email') == 'admin@gmail.com' && $request->input('password') == '123456'){
                    return redirect('/dashboard');
                }else{
                    return redirect()->route('admin.login')->with('alert', 'Anda bukan admin!!!');
                }
                // return redirect()->route('user.profile');
            }
            return redirect()->back()->with('alert', 'Email atau Password anda salah');

    }

    public function getLogoutadmin(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
