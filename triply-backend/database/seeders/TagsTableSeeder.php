<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tags = [
            "costoso",
            "economico",
            "adrenalinico",
            "18+",
            "posti incantevoli",
            "romantico",
            "per famiglie",
            "isolato",
            "autentico",
            "lussuoso",
            "notturno",
            "instagrammabile",
            "avventura estrema",
            "relax totale",
            "esperienza unica"
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->color = $faker->hexColor();
            $newTag->save();
        }
    }
}
