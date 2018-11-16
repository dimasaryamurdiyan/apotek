<?php

use Illuminate\Database\Seeder;

class obat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();//import library faker
        $limit = 10;

        for($i=0;$i<$limit;$i++){
        	DB::table('obat')->insert([
        		'nama_obat'=>$faker->name,
        		'harga'=>$faker->numberBetween($min=5000, $max=200000),
        		'stok'=>$faker->numberBetween($min=10, $max=1000),
        		'expired_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        		'production_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        		]);
        }
    }
}
