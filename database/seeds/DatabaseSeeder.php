<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
		
        $this->call(PaisTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);

        Model::reguard();
    }
}
