<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EspecialidadeFactory;

#[Fillable(["nome"])]
#[Hidden(["created_at", "updated_at"])]
class Especialidade extends Model
{
    /** @use HasFactory<EspecialidadeFactory> */
    use HasFactory;
}
