<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'code' => 1,
            'label' => 'Successful user registration'
        ]);

        DB::table('types')->insert([
            'code' => 2,
            'label' => 'Notice to admin about registration'
        ]);
    }
}
