<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'task_id' => 1,
            'is_answer' => false,
            'text' => 'Инфекционист'
        ]);

        DB::table('questions')->insert([
            'task_id' => 1,
            'is_answer' => false,
            'text' => 'Невролог'
        ]);

        DB::table('questions')->insert([
            'task_id' => 1,
            'is_answer' => true,
            'text' => 'Инфекционист и невролог'
        ]);

        DB::table('questions')->insert([
            'task_id' => 2,
            'is_answer' => false,
            'text' => 'Диетолог'
        ]);

        DB::table('questions')->insert([
            'task_id' => 2,
            'is_answer' => false,
            'text' => 'Психиатр'
        ]);

        DB::table('questions')->insert([
            'task_id' => 2,
            'is_answer' => true,
            'text' => 'Иммунолог'
        ]);

        DB::table('questions')->insert([
            'task_id' => 3,
            'is_answer' => true,
            'text' => '2'
        ]);

        DB::table('questions')->insert([
            'task_id' => 3,
            'is_answer' => false,
            'text' => '3'
        ]);

        DB::table('questions')->insert([
            'task_id' => 3,
            'is_answer' => false,
            'text' => '5'
        ]);

        DB::table('questions')->insert([
            'task_id' => 4,
            'is_answer' => false,
            'text' => 'Моника'
        ]);

        DB::table('questions')->insert([
            'task_id' => 4,
            'is_answer' => false,
            'text' => 'Фиби'
        ]);

        DB::table('questions')->insert([
            'task_id' => 4,
            'is_answer' => true,
            'text' => 'Рэйчел'
        ]);

        DB::table('questions')->insert([
            'task_id' => 5,
            'is_answer' => false,
            'text' => 'Заводной апельсин'
        ]);

        DB::table('questions')->insert([
            'task_id' => 5,
            'is_answer' => true,
            'text' => 'Пролетая над гнездом кукушки'
        ]);

        DB::table('questions')->insert([
            'task_id' => 5,
            'is_answer' => false,
            'text' => 'Перекрёсток'
        ]);
    }
}
