<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NIDN extends Model
{
    use HasFactory;
    protected $table = 'nidn';

    protected $primaryKey = 'id_nidn';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    } 
}
