<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rek_pengirim',
        'no_rek_penerima',
        'nominal'
    ];
}
