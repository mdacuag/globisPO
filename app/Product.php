<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    const CREATED_AT = null;
    const UPDATED_AT = null;

}
