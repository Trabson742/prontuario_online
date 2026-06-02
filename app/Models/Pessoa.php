<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\PessoaFactory;

#[
    Fillable([
        "nome",
        "cpf",
        "identidade",
        "email",
        "contato",
        "data_nascimento",
    ]),
]
#[Hidden(["created_at", "updated_at"])]
class Pessoa extends Model
{
    /** @use HasFactory<PessoaFactory> */
    use HasFactory;
}
