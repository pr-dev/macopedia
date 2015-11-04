<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'description'
    ];

    public static $rules = [
        'title'       => 'required|max:100',
        'description' => 'required',
    ];

    public static $messages = [
        'title.required'       => 'Pole tytuł jest wymagane.',
        'title.max'            => 'Tytuł nie może być dłuższy niż 100 znaków',
        'description.required' => 'Pole opis jest wymagane',
    ];
}
