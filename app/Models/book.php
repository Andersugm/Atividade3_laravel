<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'category_id', 'publisher_id', 'published_year'];

    public function author() {
        return $this->belongsTo(author::class);
    }

    public function Category(){
        return $this->belongsTo(category::class);
    }

    public function publisher(){
        return $this->belongsTo(publisher::class);
    }

}
