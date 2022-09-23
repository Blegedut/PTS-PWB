<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarik_tunai extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rek',
        'nominal'
    ];

    public function rekening(){
        return $this->hasOne(User::class,'no_rek' , 'no_rek');
    }
}