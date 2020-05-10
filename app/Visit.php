<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    protected $table = ('patientvisit');
    protected $fillable = ['starttie','endtime','patient_id','istreated'];
    protected $guarded =['created_at','updated_at'];
}