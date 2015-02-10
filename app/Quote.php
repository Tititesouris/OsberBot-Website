<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Quote extends Eloquent {

	protected $table = 'quotes';
	protected $fillable = ['content', 'created_by'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
