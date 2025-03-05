<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    //ini membuat satu category punya banyak posts
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
