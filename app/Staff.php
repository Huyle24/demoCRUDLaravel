<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff'; // Specify the table name if it's different from the model name in plural form
    protected $fillable = ['name','phone'];
}