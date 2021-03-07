<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class form extends Model
{
    public $table = 'form';
    public $fillable = ['name', 'email', 'mobile'];
}