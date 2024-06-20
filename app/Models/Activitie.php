<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activitie extends Model
{
    use HasFactory;
    protected $guarded = [''];


    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }

    
    protected $casts = [
        'images' => 'array', // Casting de la colonne JSON en tableau
    ];

    public function getImagesAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }
}
