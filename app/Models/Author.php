<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $fillable=['name'];

    public function petitions(){
        return $this->hasMany(Petition::class);
    }
}
