<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
    }

    protected $fillable=['title','category','description','author','signees'];
}
