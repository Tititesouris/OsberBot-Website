<?php namespace App\Http\Controllers;

class PageController extends Controller {

    function index()
	{
		//$users = User::all();
		return view('pages.index');//, ['users' => $users]);
    }
	
	function dashboard()
	{
		/*
		$id = 1;
		$user = User::whereId($id)->first();
		$news = $user->news;
		$commands = $user->commands;
		$counters = $user->counters;
		*/
		return view('pages.dashboard');//, ['news' => $news, 'commands' => $commands, 'counters' => $counters]);
	}
	
	function doc() {
		return view('pages.doc');
	}
	
	function stats() {
		return view('pages.stats');
	}
	
	function contact() {
		return view('pages.contact');
	}
	
	function privacy() {
		return view('pages.privacy');
	}

}