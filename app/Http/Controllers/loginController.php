<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Patients;
use App\Doctors;
use DB;

class loginController extends Controller
{
    public function login(Request $request){

    	$check = DB::table('patients')->where('correo',$request->email)->get();
    	if (count($check) != 0){
    		if (Hash::check($request->password,$check[0]->password)){
    			return redirect()->route('index',['id' => $check[0]->id]);
    		}else {
    			$message = ['message' => 'The password is incorrect'];
    			return view('layouts.login',['message' => $message]);
    		}
    	} else {
    			$message = ['message' => 'The email is incorrect'];
    			return view('layouts.login',['message' => $message]);
    		}
   		 
	}

	public function loginAdmin(Request $request){

    	$check = DB::table('doctors')->where('correo',$request->email)->get();
    	if (count($check) != 0){
    		if (Hash::check($request->password,$check[0]->password)){
    			return redirect()->route('admin',['id' => $check[0]->id]);
    		}else {
    			$message = ['message' => 'The password is incorrect'];
    			return view('layouts.login',['message' => $message]);
    		}
    	} else {
    			$message = ['message' => 'The email is incorrect'];
    			return view('layouts.login',['message' => $message]);
    		}
   		 
	}

	public function checkEmail(Request $request){
		$email = $request->email;
		$check = DB::table('patients')->where('correo',$email)->get();
		if (count($check) != 0) {
			 return redirect()->route('reset',['email' => $email]);
		}else {
			$check = DB::table('doctors')->where('correo',$email)->get();
			if (count($check) != 0){
				return redirect()->route('reset',['email' => $email]);
			} else {
				$message = ['message' => 'The email is incorrect'];
    			return view('layouts.check',['message' => $message]);
			}
		}
	}

	public function makeView (string $email){
		return View('layouts.reset', ['email' => $email]);
	}

	public function  resetPassword (Request $request){
		$check = DB::table('patients')->where('correo',$request->email)->get();
		if (count($check) != 0) {
			$password = Hash::make($request->newPassword);
			DB::table('patients')->where('correo',$request->email)->update(['password' => $password]);
			return redirect()->route('login');
		}else {
			$check = DB::table('doctors')->where('correo',$request->email)->get();
			if (count($check) != 0){
				DB::table('doctors')->where('correo',$request->email)->update(['password' => Hash::make($request->newPassword)]);
			return redirect()->route('login');
			} else {
				$message = ['status'=> 500, 'message' => 'The email is incorrect'];
				return view('layouts.reset', compact($message));
			}
		}
	}

	public function logout () {
    auth()->logout();

    return redirect('/');
}
}