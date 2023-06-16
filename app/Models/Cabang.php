<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $table = 'cabang';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function admins(){
        return $this->hasMany(User::class, 'cabang_id', 'id');
    }
}
