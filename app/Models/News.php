<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug'];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model -> slug = Str::slug($model->title);
            }
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }

}
