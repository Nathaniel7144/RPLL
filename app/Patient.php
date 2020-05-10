<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = ('patient');
    protected $fillable = ['person_id','register','guardian','guardianphone'];
    protected $guarded =['created_at','updated_at'];
}