<?php

class Post extends BaseModel {

	// The db table this modl relates to
    protected $table = 'posts';

    // Validation rules for our model properties
    static public $rules = [ 
    	'title' => 'required|max:100',
    	'body' => 'required|max:250'

    ];

	
	public function user()
		{
		    return $this->belongsTo('User');
		}
}