<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customeractivity extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customeractivity';
	public $timestamps = true;
	protected $dateFormat = 'U';
	
}
