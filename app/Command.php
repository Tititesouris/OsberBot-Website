<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Command extends Eloquent {

	protected $table = 'commands';
	protected $fillable = ['enabled', 'content'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
