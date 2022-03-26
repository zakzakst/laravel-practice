<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function person() {
        return $this->belongTo('App\Person');
    }

    public function getData() {
        return $this->id . ': ' . $this->title . '（' . $this->person->name . '）';
    }
}
