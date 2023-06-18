<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    use HasFactory;
    protected $table = 'kurirs';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function cabang(){
        return $this->belongsTo(Cabang::class, 'cabang_id', 'id');
    }
}
