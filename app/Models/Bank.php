<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rek',
        'saldo'
    ];

    public function rekening(){
        return $this->hasOne(User::class,'no_rek' , 'no_rek');
    }


}
