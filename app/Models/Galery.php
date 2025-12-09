<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galeries';

    protected $fillable = [
        'uuid',
        'slug',
        'photo',
        'title',
        'time',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($galery) {
            // generate uuid jika belum ada
            if (empty($galery->uuid)) {
                $galery->uuid = (string) Str::uuid();
            }

            // generate slug otomatis dari title jika belum ada
            if (empty($galery->slug) && !empty($galery->title)) {
                $galery->slug = Str::slug($galery->title);
            }
        });
    }
}
