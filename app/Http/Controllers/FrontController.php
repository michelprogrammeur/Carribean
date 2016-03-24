<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use App\Picture;
use App\Mariage;
use App\User;

class FrontController extends Controller
{

    public function index(Request $request) {

        return view('front.index' , compact('user')); 
    }


    public function showContact(){

    	return view('front.contact');

    }

    public function showGalerie() {
        $pictures = Picture::all();

        return view('front.galerie', compact('pictures'));
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

    public function agence(){

        return view('front.agence');
    }

    public function livredor(){

        return view('front.livredor');
    }

    public function formulesMariages(){

        return view('front.formules-mariages');
    }

    public function formulesEvenementsPrives(){

        return view('front.formules-evenements-prives');
    }

    public function conciergerie(){

        return view('front.conciergerie');
    }

    public function mentionsLegales(){

        return view('front.mentions-legales');
    }
    
    
}
