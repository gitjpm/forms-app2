<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use App\Models\AnswerSet;
use App\Models\AnswerText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // set
        $setName = 'SI_NO';
        $set = AnswerSet::create([
            'name' => $setName
        ]);

        // texts + options
        $texts = ['Sí', 'No'];
        foreach($texts as $text){
            $text = AnswerText::create([
                'text' => $text
            ]);
            $option = AnswerOption::create([
                'answer_text_id' => $text->id,
                'answer_set_id' => $set->id,
                'order' => $set->optionOrder(),
                'weight' => 0
            ]);
        }
    }
}
