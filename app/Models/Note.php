<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
       protected $fillable = [
        'module_id',
        'exam1',
        'exam2',
        'exam3',
    ];
   public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
