<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = ('person');
    protected $fillable = ['name','address','gender','birthday', 'bloodtype', 'phone', 'religion', 'nik'];
    protected $guarded =['created_at','updated_at'];
}