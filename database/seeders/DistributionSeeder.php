<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Facker\factory as Facker;
use DB;

class DistributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,100) as $index){
       DB::table('distributors')->insert([
          'code'=>$faker->sentence(5),
          'name'=>$faker->sentence(5),
          'type'=>$faker->sentence(5),
          'mobile'=>$faker->sentence(5),
          'district'=>$faker->sentence(5),
          'upozila'=>$faker->sentence(5)
          

       ]);

        }
    }
}
