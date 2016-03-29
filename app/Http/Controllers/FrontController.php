<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Cache;
use App\Category;
use App\Picture;
use App\Mariage;
use App\User;
use App\PictureArticle;


class FrontController extends Controller
{

    public function index(Request $request) {

        return view('front.index' , compact('user')); 
    }


    public function showContact(){

    	return view('front.contact');

    }

    public function showGalerie() {
        $categories = Category::all();
        $pictures = Picture::all();

        return view('front.galerie-categories', compact('categories', 'pictures'));
    }

    public function showPicturesByCategory(Request $request, $id) {
        $category = Category::find($id);
        $pictures = Picture::all();

        //dd($pictures);

        return view('front.category', compact('category', 'pictures'));

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
