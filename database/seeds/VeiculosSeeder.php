<?php

use Illuminate\Database\Seeder;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Veiculo::class, 10)->create();
    }
}
