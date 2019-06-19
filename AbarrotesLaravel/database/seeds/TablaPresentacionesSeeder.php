<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class TablaPresentacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentaciones')->insert([
            'presentacion' => 'Botella',
            'created_at' =>  Carbon::now()->toDateTimeString(), 
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('presentaciones')->insert([
            'presentacion' => 'Lata',
            'created_at' =>  Carbon::now()->toDateTimeString(), 
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
