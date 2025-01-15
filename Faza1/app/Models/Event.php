<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;
    protected $fillable = [
        'naziv',
        'datum',
        'vreme',
        'cena',
        'opis',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function event(){
        return $this->hasMany(Ticket::class);
    }

}
