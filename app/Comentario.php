<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $table = 'comentarios';
    public $timestamps = false;
    protected $fillable = ['nombreC','apellidoC','comentarios'];
    protected $guarded = [];
}
