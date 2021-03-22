<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anketa extends Model
{
    //
    protected $fillable = [
		'name',
		'content',
		'results_ref',
		'count_results',
		'send_email',
		'guestname',
		'guestemail',
		'guestphone',
		'user_id',
    ];
}
