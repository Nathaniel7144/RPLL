<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicalrecord extends Model
{
    //
    protected $table = ('medicalrecord');
    protected $fillable = ['problem','diagnosis','treatment','patient_id','physician_id','patvist_id'];
    protected $guarded =['created_at','updated_at'];
}
