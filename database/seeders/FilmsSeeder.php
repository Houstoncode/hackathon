<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => 'Доктор Хаус',
            'category' => 'Драма',
            'description' => 'Сериал рассказывает о команде врачей, которые должны правильно поставить диагноз пациенту и спасти его. Возглавляет команду доктор Грегори Хаус, который ходит с тростью после того, как его мышечный инфаркт в правой ноге слишком поздно правильно диагностировали.',
            'subdescription' => 'Смешно и эффективно',
            'image_href' => 'img/films/1.png',
            'age' => 16
        ]);

        DB::table('films')->insert([
            'name' => 'Побег из Шоушенка',
            'category' => 'Драма',
            'description' => 'Бухгалтер Энди Дюфрейн обвинён в убийстве собственной жены и её любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решётки.',
            'image_href' => 'img/films/2.png',
            'age' => 16,
            'subdescription' => 'Попробуй выберись'
        ]);

        DB::table('films')->insert([
            'name' => 'Список Шиндлера',
            'category' => 'Драма',
            'description' => 'Фильм рассказывает реальную историю загадочного Оскара Шиндлера, члена нацистской партии, преуспевающего фабриканта, спасшего во время Второй мировой войны почти 1200 евреев.',
            'image_href' => 'img/films/3.png',
            'age' => 16,
            'subdescription' => 'Нацисты они такие'
        ]);

        DB::table('films')->insert([
            'name' => 'Форрест Гамп',
            'category' => 'Драма',
            'description' => 'От лица главного героя Форреста Гампа, слабоумного безобидного человека с благородным и открытым сердцем, рассказывается история его необыкновенной жизни.',
            'image_href' => 'img/films/4.png',
            'age' => 12,
            'subdescription' => 'Беги, Форест, беги!'
        ]);

        DB::table('films')->insert([
            'name' => 'Клаус',
            'category' => 'Мультфильм',
            'description' => 'Владелец почтовой империи, чтобы научить ленивого отпрыска по имени Джеспер уму-разуму, отправляет его на крайний север в город Смиренсбург.',
            'image_href' => 'img/films/5.png',
            'age' => 6,
            'subdescription' => 'Вот так путешествие!'
        ]);

        DB::table('films')->insert([
            'name' => 'Унесённые призраками',
            'category' => 'Аниме',
            'description' => 'Тихиро с мамой и папой переезжают в новый дом. Заблудившись по дороге, они оказываются в странном пустынном городе, где их ждет великолепный пир. ',
            'image_href' => 'img/films/6.png',
            'age' => 12,
            'subdescription' => 'Таинственные призраки...'
        ]);

        DB::table('films')->insert([
            'name' => 'Большой куш',
            'category' => 'Криминал',
            'description' => 'Четырехпалый Френки должен был переправить краденый алмаз из Англии в США своему боссу Эви, но, сделав ставку на подпольный боксерский поединок, попадает в круговорот весьма нежелательных событий.',
            'image_href' => 'img/films/7.png',
            'age' => 16,
            'subdescription' => 'Закон нарушать не хорошо'
        ]);

        DB::table('films')->insert([
            'name' => 'Остров проклятых',
            'category' => 'Триллер',
            'description' => 'Два американских судебных пристава отправляются на один из островов в штате Массачусетс, чтобы расследовать исчезновение пациентки клиники для умалишенных преступников. При проведении расследования им придется столкнуться с паутиной лжи, обрушившимся ураганом и смертельным бунтом обитателей клиники.',
            'image_href' => 'img/films/8.png',
            'age' => 16,
            'subdescription' => 'Агрессивные психопаты'
        ]);

        DB::table('films')->insert([
            'name' => 'Бойцовский клуб',
            'category' => 'Триллер',
            'description' => 'Сотрудник страховой компании страдает хронической бессонницей и отчаянно пытается вырваться из мучительно скучной жизни. Однажды в очередной командировке он встречает некоего Тайлера Дёрдена — харизматического торговца мылом с извращенной философией. Тайлер уверен, что самосовершенствование — удел слабых, а единственное, ради чего стоит жить — саморазрушение.',
            'image_href' => 'img/films/9.png',
            'age' => 18,
            'subdescription' => 'Шизофрении быть'
        ]);

        DB::table('films')->insert([
            'name' => 'Шрэк',
            'category' => 'Мультфильм',
            'description' => 'Жил да был в сказочном государстве большой зеленый великан по имени Шрэк. Жил он в гордом одиночестве в лесу, на болоте, которое считал своим. Но однажды злобный коротышка — лорд Фаркуад, правитель волшебного королевства, безжалостно согнал на Шрэково болото всех сказочных обитателей.',
            'image_href' => 'img/films/10.png',
            'age' => 6,
            'subdescription' => 'Осла не забываем'
        ]);
    }
}