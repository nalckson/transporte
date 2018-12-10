<?php

use Illuminate\Database\Seeder;

class SolicitacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Solicitacao::class, 10)->create();
    }
}
