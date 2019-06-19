<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class TablaUnidadMedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidadmedidas')->insert([
            'unidadMedida' => 'ML',
            'created_at' =>  Carbon::now()->toDateTimeString(), 
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('unidadmedidas')->insert([
            'unidadMedida' => 'LT',
            'created_at' =>  Carbon::now()->toDateTimeString(), 
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
