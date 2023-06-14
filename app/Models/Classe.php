<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';
   protected $fillable = ['NameClass','module1','module2','module3'];


   public function students()
{
   return $this->belongsToMany(User::class, 'classe_user', 'classe_id', 'user_id');
}
public function module1()
{
    return $this->belongsTo(Module::class, 'module1');
}

public function module2()
{
    return $this->belongsTo(Module::class, 'module2');
}

public function module3()
{
    return $this->belongsTo(Module::class, 'module3');
}


}

