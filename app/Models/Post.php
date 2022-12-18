<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
