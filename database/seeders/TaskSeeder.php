<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_tasks')->insert([
            'film_id' => 1,
            'href_answer' => 'https://wink.rt.ru/media_items/65864566',
            'description' => 'Кто по медицинской специализации доктор Хаус?'
        ]);

        DB::table('film_tasks')->insert([
            'film_id' => 1,
            'href_answer' => 'https://wink.rt.ru/media_items/65864566',
            'description' => 'Форман - невролог, Уилсон - онколог, Кэмерон - ...'
        ]);

        DB::table('film_tasks')->insert([
            'film_id' => 1,
            'href_answer' => 'https://wink.rt.ru/media_items/65864566',
            'description' => 'По сколько таблеток викодина Хаус принимал за раз?'
        ]);

        DB::table('film_tasks')->insert([
            'film_id' => 1,
            'href_answer' => 'https://wink.rt.ru/media_items/65864566',
            'description' => 'Имя дочки Лизы Кадди?'
        ]);

        DB::table('film_tasks')->insert([
            'film_id' => 1,
            'href_answer' => 'https://wink.rt.ru/media_items/65864566',
            'description' => 'Первая серия шестого сезона («Broken») сюжетно перекликается с легендарным фильмом. Каким?'
        ]);
    }
}
