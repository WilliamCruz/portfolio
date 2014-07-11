<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $table = 'users';

	static public $rules = [
		'first_name' => 'required|max:25',
    	'last_name' => 'required|max:25',
    	'role' => 'required|max:25',
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public function post()
		{
		    return $this->belongsTo('Post');
		}

	public function posts()
	{
	    return $this->hasMany('Post');
	}
}
//create user controller via docs and update routes accordingly