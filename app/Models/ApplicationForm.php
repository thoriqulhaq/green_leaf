<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;
    protected $table = "application_form";

    protected $fillable = [
        'question_num',
        'part',
        'question',
        'mark'
    ];
}
