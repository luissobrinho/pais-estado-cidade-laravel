<?php

use App\Models\Pai;
use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(! Pai::where('nome', 'Brasil')->first()) {
            Pai::create([
                'nome' => 'Brasil'
            ]);
        }
    }
}
