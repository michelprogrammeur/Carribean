<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Mariage;

use Validator;


class ContentMariesController extends Controller
{
	public function dashboardMaries($id) {
        //$mariages = Mariage::all();
        $users = User::all();
        $mariage = Mariage::find($id);
    
        return view('front.dashboard-maries', compact('mariage', 'users'));
        
    }

    public function create() {
    	if($request->isMethod('post')) {

	        $validation = Validator::make($request->all(), [
				'title'     => 'required|string',
				'mariageDate' => 'required|date',
				'lieu' => 'required|string',
				'content' => 'required|text',
	        ]);

	        // Check if it fails //
	       /* if( $validation->fails() ){
	            return redirect()->back()->withInput()
	                             ->with('errors', $validation->errors() );
	        }*/

	        // Process valid data & go to success page //
	        $title = $request->input('title');
	        $mariageDate = $request->input('mariageDate');
	        $lieu = $request->input('lieu');
	        $content = $request->textarea('text');

	        $mariage = Mariage::create([
				'title'     => $title,
				'date'      => $mariageDate,
				'lieu' 		=> $lieu,
				'content'   => $content,
	        ]);

	        $mariage->save();

	        return redirect('/mariage')->with('message','La page mariage de '.$name);
    	}
    }
}
