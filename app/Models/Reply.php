<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // table name to be used by model.
    protected $table = 'replies';

    // columns names to be used in mass-assignment
    protected $fillable = ['user_id', 'comment_id', 'body'];

    /* Relations */

    // One-to-Many inverse relationship with User model.
    /*
    	Code here
    */

    // One-to-Many inverse relationship with Comment model.
    /*
    	Code here
    */  
}