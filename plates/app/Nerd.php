<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nerd extends Model
{
    // Table Name
    protected $table = 'nerds';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    // 
}
