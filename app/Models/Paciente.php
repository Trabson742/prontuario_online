<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(["pessoa_id", "cep", "endereco", "bairro", "numero", "complemento"])]
class Paciente extends Model
{
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, "pessoa_id");
    }
}
