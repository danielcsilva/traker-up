<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';

    protected $fillable = ['id','item','dsc_item','id_categoria'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];
}
