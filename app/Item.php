<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $fillable = ['id','item','dsc_item','id_categorio'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];
}
