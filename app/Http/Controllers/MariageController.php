<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Http\Requests;

use App\User;
use App\Mariage;
use App\Article;
use App\PictureArticle;

use Validator;

class MariageController extends Controller
{

	public function __construct()
	{
		//$this->middleware('admin', ['except'=>'show']);
		$this->middleware('maries');
	}

    public function index() {
    	$mariages = Mariage::all();
    	$users = User::all();

        return view('admin.mariage.index', compact('mariages', 'users'))->with('mariages', $mariages);
    }
    public function create() {

		return view('admin.mariage.add-new-mariage');
	}
	public function show($id) {
		$pictureArticle = PictureArticle::find($id);
		$users = User::all();
		$articles = Article::all();
		$mariage = Mariage::find($id);
	
    	return view('front.mariage', compact('pictureArticle', 'mariage', 'users', 'articles'));
	}


	public function showUserByMariage($id, $slug='', Request $request){

        //dd($key);
        
        
        $mariages = $user->mariages()->with('name', 'email', 'password');

    	return view('admin.mariage.index', compact('mariages'));
    }

	public function store(Request $request) {
		//dd($request->all());

		if($request->isMethod('post')) {

	        $validation = Validator::make($request->all(), [
				'name'     => 'required|string',
				'email'    => 'required|email',
				'password' => 'required|max:30'
	        ]);

	        // Check if it fails //
	       /* if( $validation->fails() ){
	            return redirect()->back()->withInput()
	                             ->with('errors', $validation->errors() );
	        }*/

	        // Process valid data & go to success page //
	        $mariage = new Mariage;
	        $mariage->save();


	        $user = new User;
	        $name = $request->input('name');
	        $email = $request->input('email');
	        $password = $request->input('password');
	        $user = User::create([
				'name'       => $name,
				'email'      => $email,
				'mariage_id' => $mariage->id,
				'password'   => Hash::make($password),
				'status'     => 'maries'
	        ]);

			$user->save();

	        return redirect('/mariage')->with('message','La page mariage de '.$name);
   		}
   	}

   	public function mariage($id)
   	{
   		dd("ici page du marié $id");
   	}

   	public function destroy($id) {
        
        // todo 
        $mariage = Mariage::find($id);
        $users = User::all();
        foreach ($users as $user) {
           	if($user->mariage_id == $mariage->id)
           	{
           		$user->delete();
           		$mariage->delete();
           	}
        }       
        return back()->with(['message'=>trans('app.success')]);
   }

   
}
