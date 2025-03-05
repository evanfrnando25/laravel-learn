<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //ini untuk protected field apa saja yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    //ini guarded field apa saja yang gaboleh diisi
    protected $guarded = ['id'];

    //ini kita membuat relation ke category 1 post belongs to category table
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
