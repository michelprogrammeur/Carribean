<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Mariage;

class LoginController extends Controller
{
    public function login(Request $request){


       	//dd($request->all());
		if($request->isMethod('post')) {

			$this->validate($request, [
				'email'    => 'required|email',
				'password' => 'required|max:30',
				'remember' => 'in:remember', // si checked bonne valeur
		 	]); 	

			$remember = $request->input('remember')? true : false; // rester connecter ou pas
			$credentials = $request->only('email', 'password');

			if(Auth::attempt($credentials, $remember)) {
				$user = $request->user();
				if($user->status === 'admin') {
					return redirect('dashboard')->with([
		    			'message' => "Vous êtes bien connecté en tant qu'admin !",
		    		]);
		
				}
				elseif ($user->status === 'maries' ) {
					$userId = $user->mariage_id;

					return redirect()->route('mariage.show', [$userId])->with([
		    			'message' => "Vous êtes bien connecté en tant qu'admin !",
		    		]);
				}
				else{
					Auth::logout();

					return redirect('/')->with(['message', 'Vous n\'êtes pas autorisé à rentrer !']);
				}

			}

			else {
				return back()->withInput($request->only('email', 'remember'))->with([
					'message'=> "Votre login ou votre mot de passe est incorrect !",
				]);
			}

    	}else{
    		return view('auth.login');
    	}
    }
    public function logout() {
    	Auth::logout();

    	return redirect('/');
    }

}
