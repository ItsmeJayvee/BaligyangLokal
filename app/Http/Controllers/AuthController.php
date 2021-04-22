<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function authenticateUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:15'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role == 4){
                return redirect('/');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }
        
        return back()->withErrors([
            'email' => 'The provided email does not match our records.',
            'password' => 'You have entered an invalid password.'
        ]);
    }

    public function authenticateSeller(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:15'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role == 2){
                return redirect('/lokals3llerd4sh');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }
        
        return back()->withErrors([
            'email' => 'The provided email does not match our records.',
            'password' => 'You have entered an invalid password.'
        ]);
    }

    public function authenticateRider(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:15'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role == 3){
                return redirect('/lokalr1d3rdash');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }
        
        return back()->withErrors([
            'email' => 'The provided email does not match our records.',
            'password' => 'You have entered an invalid password.'
        ]);
    }

    public function authenticateAdmin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:15'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role == 1){
                return redirect('/lokaladm1ndashb04rd');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }
        
        return back()->withErrors([
            'email' => 'The provided email does not match our records.',
            'password' => 'You have entered an invalid password.'
        ]);
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
        $this->validation($request);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 4;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/');
    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|max:15'
        ]);
    }

    public function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
}
