<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customeractivity extends Model
{
    protected $table = 'customeractivity';
	public $timestamps = true;
	protected $dateFormat = 'U';
	
}
