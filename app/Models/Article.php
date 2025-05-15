<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'cover', 'published_at', 'category'];
    protected $dates = ['published_at'];

    // Adicionar a relação developers
    public function developers()
    {
        return $this->belongsToMany(Developer::class);
    }
    public function getPublishedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value);
    }
     public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (!$article->slug) {
                $article->slug = Str::slug($article->title);
            }
        });

        static::updating(function ($article) {
            if (!$article->slug) {
                $article->slug = Str::slug($article->title);
            }
        });
    }
}
