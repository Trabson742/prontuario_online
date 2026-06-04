<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\InstituicaoFactory;

#[Fillable(["nome", "cnpj", "cidade"])]
#[Hidden(["created_at", "updated_at"])]
class Instituicao extends Model
{
    /** @use HasFactory<InstituicaoFactory> */
    use HasFactory;
}
