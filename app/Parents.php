<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model {

	public $table = 'parents';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'sfzz', 'fmxm1', 'fmzjlx1', 'fmzjhm1', 'fmxm2', 'fmzjlx2', 'fmzjhm2',
	];

	public function user() {
		return $this->belongsTo('App\User', 'xh', 'username');
	}
}
