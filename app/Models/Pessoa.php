<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Pessoa extends Model
{
    //
}
