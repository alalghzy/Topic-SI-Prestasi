<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','npm','jurusan','lomba','penyelenggara','tingkat','tanggal','sertifikat'];
    // protected $table = "tb_lomba";
    public $timestamps = false;

    public function user(){

        return $this->belongsTo('App\Models\User');
        }
}
