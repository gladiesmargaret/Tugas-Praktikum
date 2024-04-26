<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';
    public $timestamps = false;
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }    
}