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

    public function create($id) {
    	$users = User::all();
        $mariage = Mariage::find($id);

        return view('maries.pagecontent.add-new-content', compact('mariage', 'users'));
    }

    public function update(Request $request, $id) {
    	$mariage = Mariage::find($id);
    	
    	//dd($mariage);

		if($request->isMethod('post')) {
	        $validation = Validator::make($request->all(), [
				'title'       => 'required|string',
				'mariageDate' => 'required|string',
				'lieu'        => 'required|text',
				'content'     => 'required|text',
	        ]);

	        
	        // Check if it fails //
	        /*if( $validation->fails() ){
	            return redirect()->back()->withInput()
	                             ->with('errors', $validation->errors() );
	        }*/

	        // Process valid data & go to success page //
	       	$title = $request->input('title');
	        $mariageDate = $request->input('mariageDate');
	        $lieu = $request->input('lieu');
	        $content = $request->input('contenu');

	        $mariage->update([
				'title'       => $title,
				'datemariage' => $mariageDate,
				'lieu'        => $lieu,
				'content'     => $content,
	        ]);

	        
    		return redirect()->intended('mariage/'.$mariage->id)->with('message', 'coucou');    
    	}
    }
}
