<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name','image','slug','is_active '];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
