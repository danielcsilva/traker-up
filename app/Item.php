<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';

    protected $fillable = ['item','dsc_item','id_categoria'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];


    public function categoria(){
        return $this->belongsTo('App\Categoria','id_categoria');
    }
}
