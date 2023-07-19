<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'event_section', 'event_id', 'section_id')
                    ->withPivot('fecha')
                    ->withTimestamps();
    }
}
