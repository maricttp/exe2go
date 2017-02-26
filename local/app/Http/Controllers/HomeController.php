<?php namespace App\Http\Controllers;

use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		 return view('home')->with('active','home');
	}

	/**
 * Show the application welcome screen to the user.
 *
 * @return Response
 */
	public function careers()
	{
	 	return view('careers')->with('active','careers');
	}


		/**
 * Show the application welcome screen to the user.
 *
 * @return Response
 */
	public function about()
	{
	 	return view('about')->with('active','about');
	}


		/**
 * Show the application welcome screen to the user.
 *
 * @return Response
 */
	public function results()
	{
	 	return view('results')->with('active','results');
	}


	
		/**
 * Show the application welcome screen to the user.
 *
 * @return Response
 */
	public function expertise()
	{
	 	return view('expertise')->with('active','expertise');
	}




}
