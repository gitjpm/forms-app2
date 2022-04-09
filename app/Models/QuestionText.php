<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionText extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function questions()
    {
        return $this->hasMany('Question');
    }
}
