<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table='siswa';
    protected $fillable=['id','nama','nis','user_id','kelas_id','foto'];
}
