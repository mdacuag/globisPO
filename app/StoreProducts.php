<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreProducts extends Model
{
    //
        protected $table = 'storeproducts';
    protected $primaryKey = 'spoid';
    public $incrementing = false;
    
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
