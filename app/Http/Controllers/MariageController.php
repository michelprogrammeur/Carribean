<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mariage;

class MariageController extends Controller
{
    public function index() {
    	$mariages = Mariage::paginate(10);

        return view('admin.mariage.index')->with('mariages', $mariages);
    }
    public function create() {

		return view('admin.mariage.add-new-mariage');
	}
}
