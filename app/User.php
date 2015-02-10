<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

	protected $table = 'users';
	protected $fillable = ['token'];
	protected $hidden = ['password', 'token'];

	public function news()
	{
		return $this->hasMany('App\News', 'user_id');
	}

	public function commands()
	{
		return $this->hasMany('App\Command', 'user_id');
	}

	public function counters()
	{
		return $this->hasMany('App\Counter', 'user_id');
	}

	public function highlights()
	{
		return $this->hasMany('App\Highlight', 'user_id');
	}

	public function quotes()
	{
		return $this->hasMany('App\Quote', 'user_id');
	}

}
