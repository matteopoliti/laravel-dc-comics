<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $element) {
            $newComics = new Comic();

            $newComics->title = $element['title'];
            $newComics->description = $element['description'];
            $newComics->thumb = $element['type'];
            $newComics->price = $element['price'];
            $newComics->series = $element['series'];
            $newComics->sale_date = $element['sale_date'];
            $newComics->type = $element['type'];
            $newComics->save();
        }
    }
}
