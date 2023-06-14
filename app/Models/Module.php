<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
   protected $fillable=[
        'name',
        'description',
        'coefficient'
    ];
    public function classes()
{
    return $this->hasMany(Classe::class);
}

    
}