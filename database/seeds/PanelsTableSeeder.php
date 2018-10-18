<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Eliminar registros
        DB::table('panels')->truncate();
        
    }
}
