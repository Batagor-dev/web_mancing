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
        'title',
        'photo',
        'time',
    ];

    /**
     * Gunakan UUID untuk route model binding
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Boot method untuk auto-generate UUID dan slug saat creating
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function (Galery $galery) {
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
