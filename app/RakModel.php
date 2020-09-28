<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RakModel extends Model
{
    protected $table = 'rak';
    protected $primaryKey = 'id_rak';
    protected $guarded = []; // pengecualian kolom pd tabel
    // protected $fillable = [''] // nama kolom yang dimasukkan
    public $timestamps = false;
}
