<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
   protected $table ='guru';
   protected $fillable =['id','nama','nip'];
}
