<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function get_index()
	{
		return view('pages.welcome');
	}

    public function get_about()
    {   
        $first = "Abdo";
        $last  = "Magdy";
        $full  = $first . " " . $last ;
    	return view('pages.about')->with("fullname", $full);
    }

    public function get_contact()
    {
    	return view('pages.contact');
    }
}
