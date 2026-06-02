<?php

namespace Database\Factories;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => fake()->name(),
            "contato" => fake()->phoneNumber(),
            "email" => fake()->unique()->safeEmail(),
            "cpf" => fake()->unique()->cpf(false),
            "identidade" => fake()->rg(false),
            "data_nascimento" => date(
                $format = "Y-m-d",
                strtotime("-18 years"),
            ),
        ];
    }
}
