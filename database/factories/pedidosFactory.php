<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Str;
use app\Models;

class pedidosFactory extends Factory
{
    protected $model = \App\Models\pedidos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'clientes_id' => $this->faker->biasedNumberBetween(0, 100),
            'data_pedido' => $this->faker->date(),
            'status' => 'em aberto',
        ];
    }
}
