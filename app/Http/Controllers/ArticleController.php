<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Mariage;
use App\Article;
use App\PictureArticle;

use Carbon\Carbon;
use Validator;
use File;


class ArticleController extends Controller
{
    public function articleMaries($id) {
        //$mariages = Mariage::all();
        $users = User::all();
        $article = Article::find($id);
        $mariage = Mariage::find($id);
    
        return view('front.article-maries', compact('mariage', 'users', 'article'));
        
    }

    public function create($id) {
    	$users = User::all();
    	$articles = Article::all();
        $mariage = Mariage::find($id);

        return view('front.article-maries', compact('mariage', 'users', 'article'));
    }

    public function store(Request $request, $id) {
    	$mariage = Mariage::find($id);


		if($request->isMethod('post')) {

	        $validation = Validator::make($request->all(), [
				'articleTitle'   => 'required|string',
        		'articlePicture' => 'required|image|mimes:png,jpeg,jpg|min:1|max:250',
				'articleContenu' => 'required|text',
	        ]);

	        // Check if it fails //
	       /* if( $validation->fails() ){
	            return redirect()->back()->withInput()
	                             ->with('errors', $validation->errors() );
	        }*/

	        // Process valid data & go to success page //
	        

	        //-----------------------------------------------------------
	        $article = new Article;

	        $title = $request->input('articleTitle');
	        $content = $request->input('articleContenu');
	        $mariage_id = $mariage->id;

	        $article = Article::create([
				'title'       => $title,
				'mariage_id' => $mariage->id,
				'content'      => $content,
				'published_at' => Carbon::now(),
	        ]);
	        $article->save();

	        $pictureArticle = new PictureArticle;

	        $articlePicture = $request->file('articlePicture');

	        $destination_path = 'uploads/';
	        $filename = str_random(8).'_'.$articlePicture->getClientOriginalName();
	        $articlePicture->move($destination_path, $filename);
	        
	        $pictureArticle->file = $destination_path . $filename;
	        $pictureArticle->article_id = $article->id;
	        $pictureArticle->save();


	    	return redirect()->intended('mariage/'.$mariage->id)->with('message', 'coucou');;
   		}
    }

    public function edit($id) {
        //$mariages = Mariage::all();
        $users = User::all();
        $article = Article::find($id);
        $mariage = Mariage::find($id);
        $pictureArticle = PictureArticle::find($id);
    
        return view('maries.pagecontent.edit-article', compact('mariage', 'users', 'article'));
    }

    public function update(Request $request, $id) {
    	$mariage = Mariage::find($id);
    	$article = Article::find($id);
    	
		if($request->isMethod('post')) {
	        $validation = Validator::make($request->all(), [
				'title'       => 'required|string',
				'content'     => 'required|text',
	        ]);

	        
	        // Check if it fails //
	        /*if( $validation->fails() ){
	            return redirect()->back()->withInput()
	                             ->with('errors', $validation->errors() );
	        }*/

	        $pictureArticle = PictureArticle::find($id);

			if( $request->hasFile('articlePicture') ){
				$articlePicture = $request->file('articlePicture');
				$destination_path = 'uploads/';
				$filename = str_random(8).'_'.$articlePicture->getClientOriginalName();

	            $articlePicture->move($destination_path, $filename);
	            $pictureArticle->article_id = $article->id;
				$pictureArticle->file = $destination_path . $filename;
			}

			$pictureArticle->save();



	        //--------------------------------------------
	       	$title = $request->input('articleTitle');
	        $content = $request->input('articleContenu');

	        $article->update([
				'title'       => $title,
				'content'     => $content,
	        ]);

    		return redirect()->intended('mariage/'.$article->mariage_id)->with('message', 'coucou');    
    	}
    }

    public function destroy(PictureArticle $pictureArticle, $id) {

    	$pictureArticle = PictureArticle::find($id);

    	$articlePicture = $pictureArticle->file;
        if(File::exists($articlePicture)) {
            File::delete($pictureArticle->file);
        }
		$pictureArticle->delete();
        
        // todo 
        $article = Article::find($id); 
        $article->delete();    
        return back()->with(['message'=>trans('app.success')]);
   }
}
