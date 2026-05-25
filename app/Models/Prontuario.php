<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[
    Fillable([
        "paciente_id",
        "medico_id",
        "data_abertura",
        "descricao",
        "prescricao",
    ]),
]
class Prontuario extends Model
{
    public function paciente()
    {
        return $this->hasOne(Paciente::class, "paciente_id");
    }

    public function medico()
    {
        return $this->hasOne(Medico::class, "medico_id");
    }
}
