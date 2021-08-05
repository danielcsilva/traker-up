<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['id','categoria','dsc_categoria','ativo'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];
}
