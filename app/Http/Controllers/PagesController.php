<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
		$first = 'Nathan';
		$last = 'Lehman'; 
		
		$people = [
			'Annette Lehman', 
			'Nora Lehman', 
			'Evelyn Lehman'
		];
		//return view('pages.about')->with('name', $name);
		
		/* return view('pages.about')->with([
			'first' => 'Nathan', 
			'last' => 'Lehman'
		]); */
		
		return view('pages.about', compact('people'));
	}
	
	public function contact(){
		return view('pages.contact');
	}
}
