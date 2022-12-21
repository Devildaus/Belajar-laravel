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
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
