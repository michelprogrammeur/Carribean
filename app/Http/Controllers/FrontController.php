<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class FrontController extends Controller
{

    public function index() {

    	return view('front.index');
    }


    public function showContact(){

    	return view('front.contact');

    }

    public function sendContact(Request $request){   // dans le conteneur de service il injecte la request
    	//dd($request->all());

    	$this->validate($request, [
			'email'   => 'required|email',
			'message' => 'required|max:255',
    	]);


		$data    = $request->all();
		$msg     = $data['message'];

    	Mail::send('emails.contact', compact('msg'), function($m) use($data) {

    		$m->from($data['email'], '[app web]');
    		$m->to(env('EMAIL_TECHN'), 'admin')->subject('Contact app web');

    	});

    	return redirect('contact')->with([
    		'message' => "message envoyé !",
    		'alert'   => 'success',
    	]);
    }

    public function dashboard(){

		return view('front.dashboard');
    }

    public function prestations(){

        return view('front.prestations');
    }

    public function galerie(){

        return view('front.galerie');
    }


    public function livredor(){

        return view('front.livredor');
    }
}
