<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model {

	protected $fillable = [

		'street',
		'city',
		'zip',
		'country',
		'state',
		'price',
		'description'

	];
	
	public function photo()
	{
		return $this->hasMany('app\Photo');
	}

}
