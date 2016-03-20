<?php

namespace App\Http\Controllers;

use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Picture;
use Validator;


class PictureController extends Controller
{
    public function index() {
    	$pictures = Picture::paginate(10);

        return view('admin.picture.index')->with('pictures', $pictures);
    }

	/* 2. This method relates to the "add new picture" view */
	public function create() {

		return view('admin.picture.add-new-picture');
	}

	public function store(Request $request) {
		//dd($request->all());

    	// Validation //
        $validation = Validator::make($request->all(), [
        	'userfile'    => 'required|image|mimes:png,jpeg,jpg|min:1|max:10000',
            'caption'     => 'required|regex:/^[A-Za-z ]+$/'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $picture = new Picture;

        $file = $request->file('userfile');
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();

        $picture = Picture::create([
        	'uri' => $filename
        ]);
        $file->move($destination_path, $filename);
        
        $picture->file = $destination_path . $filename;
        $picture->caption = $request->input('caption');
        $picture->save();

        return redirect('/picture')->with('message','You just uploaded an image!');
   	}

	
	/* 3. This method relates to the "picture detail" view */
    public function show($id) {
         $picture = Picture::find($id);

         return view('admin.picture.picture-detail')->with('picture', $picture);
    }

	/* 4. This method relates to the "edit picture" view */
    public function edit($id) {
        $picture = Picture::find($id);

        return view('admin.picture.edit-picture')->with('picture', $picture);
    }

  	public function update(Request $request, $id) {
		// Validation //
		$validation = Validator::make($request->all(), [
			'userfile'    => 'sometimes|image|mimes:jpeg,jpg,png|min:1|max:10000',
		    'caption'     => 'required|regex:/^[A-Za-z ]+$/'
		]);

		// Check if it fails //
		if( $validation->fails() ){
		    return redirect()->back()->withInput()
		                     ->with('errors', $validation->errors() );
		}

		// Process valid data & go to success page //
		$picture = Picture::find($id);

		// if user choose a file, replace the old one //
		if( $request->hasFile('userfile') ){
			$file = $request->file('userfile');
			$destination_path = 'uploads/';
			$filename = str_random(6).'_'.$file->getClientOriginalName();
			$file->move($destination_path, $filename);
			$picture->file = $destination_path . $filename;
		}

		// replace old data with new data from the submitted form //
		$picture->caption = $request->input('caption');
		$picture->save();

		return redirect('/picture')->with('message','You just updated an picture!');
	}

	public function destroy($id) {
		$picture = Picture::find($id);
		/*if ($picture) {
            Storage::delete('uploads/'.$picture->uri); // file
        }*/
		$picture->delete();

		return redirect('/picture')->with('message','You just uploaded an picture!');
   }
}
