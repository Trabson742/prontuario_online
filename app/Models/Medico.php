<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(["pessoa_id"])]
class Medico extends Model
{
    return $this->belongsTo(Pessoa::class, 'pessoa_id');
}
