<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models;

class produtosFactory extends Factory
{
    protected $model = \App\Models\produtos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nome_produto' => $this->faker->word,
            'valor_unitario' => $this->faker->biasedNumberBetween(1, 100) . '.' . $this->faker->biasedNumberBetween(0, 100),
            'codigo_barras' => $this->faker->numerify("####################"),
        ];
    }
}
