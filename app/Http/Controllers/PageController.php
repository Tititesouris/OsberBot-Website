<?php namespace App\Http\Controllers;

use App\User;
use App\Command;
use App\Counter;
use App\Highlight;
use App\Quote;
use App\News;
use App\OsberBot;
use Illuminate\Support\Facades\DB;

class PageController extends Controller {
    function index()
	{
		return view('pages.index');
    }
	
	function dashboard()
	{
		$id = 1;
		$user = User::whereId($id)->first();
		$commands = $user->commands;
		$counters = $user->counters;
		$news = $user->news;

		return view('pages.dashboard', ['commands' => $commands, 'counters' => $counters, 'news' => $news]);
	}
	
	function doc() {
		return view('pages.doc');
	}
	
	function stats() {
		$nbUsers = User::count();
		$nbCommands = Command::count();
		$nbCounters = Counter::count();
		$nbHighlights = Highlight::count();
		$nbQuotes = Quote::count();
		$nbNews = News::count();

		$usersWeek = DB::select("
			SELECT COUNT(*)
			FROM users
			WHERE created_at < NOW() - INTERVAL '7 days'
		");
		$usersWeek = (array)$usersWeek[0]; $usersWeek = $usersWeek['count'];

		$osberbot = OsberBot::first();

		$firstBoot = $osberbot->first_boot;
		$downtime = $osberbot->downtime;
		$lastBoot = $osberbot->last_boot;

		$totalUptime = time()-strtotime($firstBoot);
		$totalUptime = floor(($totalUptime-$downtime)/$totalUptime*10000)/100;

		$uptime = time()-strtotime($lastBoot);
		$days = floor($uptime/(3600*24));
		$uptime -= $days*(3600*24);
		$hours = floor($uptime/3600);
		$uptime -= $hours*3600;
		$minutes = floor($uptime/60);
		$uptime -= $minutes*60;
		$uptime = $days."d ".$hours."h ".$minutes."m ".$uptime."s";

		return view('pages.stats', ['nbUsers' => $nbUsers, 'nbCommands' => $nbCommands, 'nbCounters' => $nbCounters, 'nbHighlights' => $nbHighlights, 'nbQuotes' => $nbQuotes, 'nbNews' => $nbNews, 'totalUptime' => $totalUptime, 'uptime' => $uptime, 'usersWeek' => $usersWeek]);
	}
	
	function contact() {
		return view('pages.contact');
	}

	function privacy() {
		return view('pages.privacy');
	}

}