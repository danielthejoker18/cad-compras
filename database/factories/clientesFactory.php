<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models;

class clientesFactory extends Factory
{
    protected $model = \App\Models\clientes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cpf' => $this->faker->numerify('###########'),
            'nome_cliente' => $this->faker->name(),
            'email' => $this->faker->email()
        ];
    }
}
