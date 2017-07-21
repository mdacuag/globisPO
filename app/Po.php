<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    //
	protected $table = 'po';
    protected $primaryKey = 'poid';
    public $incrementing = false;
    
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
