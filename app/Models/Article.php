<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text'];

    public function category() {

        return $this->belongsTo(Category::class, 'id', 'category_id');

    }
}
