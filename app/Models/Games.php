<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function imagen(){
        return asset('/games/images' . $this->nombreFoto);
    }
}
