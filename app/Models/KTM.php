<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTM extends Model
{
    use HasFactory;
    protected $table = 'ktm';

    protected $primaryKey = 'id_ktm';
    public $timestamps = false;
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }    
}