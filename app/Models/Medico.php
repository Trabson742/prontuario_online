<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(["pessoa_id"])]
class Medico extends Model
{
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, "pessoa_id");
    }
    public function especialidades()
    {
        return $this->hasManyThrough(
            Especialidade::class,
            MedicoEspecialidade::class,
            "medico_id",
            "especialidade_id",
        );
    }
}
