<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablaProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

		for ($i=0; $i < 50; $i++) {
		    \DB::table('productos')->insert(array(
		           'producto' => $faker->word,
		           'presentacion_id' => $faker->numberBetween($min = 1, $max = 2),
		           'cantidad'  => $faker->randomDigit,
		           'unidadMedida_id' => $faker->numberBetween($min = 1, $max = 2),
		           'precio'  => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 500),
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));
		}
    }
}
