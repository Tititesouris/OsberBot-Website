<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Counter extends Eloquent {

	protected $table = 'counters';
	protected $fillable = ['enabled', 'content'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
