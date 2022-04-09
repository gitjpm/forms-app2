<?php

namespace Database\Seeders;

use App\Libs\QuestionTypes;
use App\Models\OptionsSet;
use App\Models\Question;
use App\Models\QuestionText;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // texts
        for($i = 0; $i < 10; $i++){
            $text = QuestionText::create([
                'text' => '¿'.$faker->text.'?'
            ]);

            Question::create([
                'type' => QuestionTypes::SINGLE_OPTION,
                'question_text_id' => $text->id,
                'options_set_id' => OptionsSet::where('name', 'SI_NO')->first()->id,
                'required' => true
            ]);
        }

    }
}
