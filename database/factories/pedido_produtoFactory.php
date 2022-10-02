<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models;

class pedido_produtoFactory extends Factory
{
    protected $model = \App\Models\pedido_produto::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'pedidos_id' => $this->faker->biasedNumberBetween(0, 100),
            'produtos_id' => $this->faker->biasedNumberBetween(0, 100),
            'quantidade' => $this->faker->biasedNumberBetween(0, 100)
        ];
    }
}
