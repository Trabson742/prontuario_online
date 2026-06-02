<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(["name", "email", "password", "pessoa_id"])]
#[
    Hidden([
        "password",
        "remember_token",
        "pessoa_id",
        "created_at",
        "updated_at",
    ]),
]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
        ];
    }
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, "pessoa_id");
    }
    public function user()
    {
        return $this->hasOne(User::class, "pessoa_id");
    }

    public function paciente()
    {
        return $this->hasOne(Paciente::class, "pessoa_id");
    }

    public function medico()
    {
        return $this->hasOne(Medico::class, "pessoa_id");
    }
}
