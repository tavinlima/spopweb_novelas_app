<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Novela extends Model
{
    protected $fillable = ['titulo', 'descricao','inicio_exibicao','fim_exibicao','topo_audiencia','qtd_capitulos'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
        $model->id = (string) Str::uuid();
    });
    }
}
