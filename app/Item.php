<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item_category_id', 'name'];
}
