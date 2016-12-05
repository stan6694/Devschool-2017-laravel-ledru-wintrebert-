<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => str_random(10),
            'description' => str_random(10),
            'date_de_debut' =>  str_random(10),
            'date_de_fin' =>  str_random(10),
            'lieu' =>  str_random(10),
            'tarif' =>  str_random(10),
        ]);
    }