<?php

namespace Database\Seeders;

use App\Models\clientes;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* DB::table('clientes')->insert([
            'cpf' => Str::random(11),
            'email' => Str::random(10) . '@gmail.com',
            'nome_cliente' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); */
        clientes::create([
            'cpf' => Str::random(11),
            'email' => Str::random(10) . '@gmail.com',
            'nome_cliente' => Str::random(10),
        ]);
    }
}
