<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Highlight extends Eloquent {

	protected $table = 'highlights';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
