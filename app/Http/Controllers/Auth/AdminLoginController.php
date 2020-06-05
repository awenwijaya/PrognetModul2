<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'admin';
    
    protected $redirectedTo = '/admin/home';
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function showLoginForm(){
        return view('auth/adminLogin');
    }
    
    public function guard(){
        return auth()->guard('/admin/home');
    }
    
    public function showRegisterPage(){
        return view('auth/adminRegister');
    }
    
    public function register(Request $request){
        $request -> validate ([
            'name' => 'required|string',
            'username' => 'required|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|min:11|numeric'
        ]);
        Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'profile_image' => $request->profileimage
        ]);
        
        return redirect()->route('loginPage')->with('success','Registration Successfull! Please login to continue');
        
    }
    
    public function login(Request $request){
        if(auth()->guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect()->route('/admin/home');
        }
        
        return back()->withErrors(['username' => 'Username or Password is incorrect!']);
    }
}
