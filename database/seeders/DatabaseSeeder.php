<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\clientes::factory()->times(100)->create();
        \App\Models\produtos::factory()->times(100)->create();
        \App\Models\pedidos::factory()->times(100)->create();
        \App\Models\pedido_produto::factory()->times(400)->create();
    }
}
