<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario', 'comentario',
    ];

}
