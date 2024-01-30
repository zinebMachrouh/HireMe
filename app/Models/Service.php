<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'categories',
        'user_id',
    ];

    public function prestataire()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
