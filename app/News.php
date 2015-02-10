<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class News extends Eloquent {

	protected $table = 'news';
	protected $fillable = ['enabled', 'content'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
