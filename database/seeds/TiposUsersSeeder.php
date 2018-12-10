<?php

use Illuminate\Database\Seeder;

class TiposUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TipoUser::class, 3)->create();
    }
}