<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(! \App\Models\Estado::where('uf', 'AL')->first()) {
            $estados = [
                ['pais_id' => 1, 'uf' => 'AC', 'nome' =>'Acre'],
                ['pais_id' => 1, 'uf' => 'AL', 'nome' =>'Alagoas'],
                ['pais_id' => 1, 'uf' => 'AP', 'nome' =>'Amapá'],
                ['pais_id' => 1, 'uf' => 'AM', 'nome' =>'Amazonas'],
                ['pais_id' => 1, 'uf' => 'BA', 'nome' =>'Bahia'],
                ['pais_id' => 1, 'uf' => 'CE', 'nome' =>'Ceará'],
                ['pais_id' => 1, 'uf' => 'DF', 'nome' =>'Distrito Federal'],
                ['pais_id' => 1, 'uf' => 'ES', 'nome' =>'Espírito Santo'],
                ['pais_id' => 1, 'uf' => 'GO', 'nome' =>'Goiás'],
                ['pais_id' => 1, 'uf' => 'MA', 'nome' =>'Maranhão'],
                ['pais_id' => 1, 'uf' => 'MT', 'nome' =>'Mato Grosso'],
                ['pais_id' => 1, 'uf' => 'MS', 'nome' =>'Mato Grosso do Sul'],
                ['pais_id' => 1, 'uf' => 'MG', 'nome' =>'Minas Gerais'],
                ['pais_id' => 1, 'uf' => 'PA', 'nome' =>'Pará'],
                ['pais_id' => 1, 'uf' => 'PB', 'nome' =>'Paraíba'],
                ['pais_id' => 1, 'uf' => 'PR', 'nome' =>'Paraná'],
                ['pais_id' => 1, 'uf' => 'PE', 'nome' =>'Pernambuco'],
                ['pais_id' => 1, 'uf' => 'PI', 'nome' =>'Piauí'],
                ['pais_id' => 1, 'uf' => 'RJ', 'nome' =>'Rio de Janeiro'],
                ['pais_id' => 1, 'uf' => 'RN', 'nome' =>'Rio Grande do Norte'],
                ['pais_id' => 1, 'uf' => 'RS', 'nome' =>'Rio Grande do Sul'],
                ['pais_id' => 1, 'uf' => 'RO', 'nome' =>'Rondônia'],
                ['pais_id' => 1, 'uf' => 'RR', 'nome' =>'Roraima'],
                ['pais_id' => 1, 'uf' => 'SC', 'nome' =>'Santa Catarina'],
                ['pais_id' => 1, 'uf' => 'SP', 'nome' =>'São Paulo'],
                ['pais_id' => 1, 'uf' => 'SE', 'nome' =>'Sergipe'],
                ['pais_id' => 1, 'uf' => 'TO', 'nome' =>'Tocantins']
            ];
            foreach($estados as $estado) {
                \App\Models\Estado::create($estado);
            }
        }
    }
}
