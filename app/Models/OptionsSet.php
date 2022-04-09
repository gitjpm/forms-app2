<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsSet extends Model
{
    use HasFactory;

    public function optionOrder()
    {
        return AnswerOption::where('options_set_id', $this->id)->count();
    }
}
