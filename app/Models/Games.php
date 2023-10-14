<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'platforms_id',
        'categories_id',
        'descripcion',
        'cover',
        'year',
    ];

    public function categories():BelongsTo
    {
        return $this->belongsTo(Categories::class)->withDefault();
    }

    public function platforms():BelongsTo
    {
        return $this->belongsTo(Platforms::class)->withDefault();
    }


    public function imagen(){
        return asset('games/images' . $this->nombreFoto);
    }
}
