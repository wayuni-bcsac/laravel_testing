<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['fname','lname','email','password'];

    public function phone()
    {
      return $this->hasOne(Phone::class);
    }
}


