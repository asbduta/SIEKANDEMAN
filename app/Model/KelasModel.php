<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table ='kelas';
    protected $fillable=['id','label'];
}
