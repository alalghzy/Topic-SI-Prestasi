<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Prestasi extends Model
{
    use HasFactory, Sortable;
    protected $fillable = ['name','npm','jurusan','juara','lomba','penyelenggara','tingkat','tanggal'];

    public $sortable = ['name', 'npm' , 'jurusan' , 'tingkat' , 'tanggal'];

}
