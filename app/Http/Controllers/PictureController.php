<?php

namespace App\Http\Controllers;

use File;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;
use App\PictureArticle;
use Validator;

class PictureController extends Controller
{
    public function index() {
    	$pictures = Picture::paginate(12);

        return view('admin.picture.index', compact('pictures'));
    }


	/* 2. This method relates to the "add new picture" view */
	public function create() {
        $categories = Category::lists('title', 'id');

		return view('admin.picture.add-new-picture', compact('categories'));
	}

	public function store(Request $request) {

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
        $category = $request->input('category_id');
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();

        $picture = Picture::create([
            'category_id' => $category,
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
        $categories = Category::lists('title', 'id');
        $picture = Picture::find($id);

        return view('admin.picture.edit-picture', compact('categories'))->with('picture', $picture);
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
            $category = $request->input('category_id');
			$destination_path = 'uploads/';
			$filename = str_random(6).'_'.$file->getClientOriginalName();

            $picture->update([
                'category_id' => $category,
            ]);

            $file->move($destination_path, $filename);
			$picture->file = $destination_path . $filename;
		}

		// replace old data with new data from the submitted form //
		$picture->caption = $request->input('caption');
		$picture->save();

		return redirect('/picture')->with('message','You just updated an picture!');
	}

	public function destroy(Picture $picture) {
        
        $file = $picture->file;
        if(File::exists($file)) {
            File::delete($picture->file);
        }

		$picture->delete();

		return redirect('/picture')->with('message','You just uploaded an picture!');
   }
}
