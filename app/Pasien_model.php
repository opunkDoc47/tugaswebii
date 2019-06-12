<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien_model extends Model
{
    protected $table='pasien';
   protected $fillable=['nama','jeniskelamin','tempatlahir','umur','pekerjaan','alamat'];
}
