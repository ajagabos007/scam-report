<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Asset extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function states(){
        return $this->hasMany(State::class);
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function reportScams()
    {
        return $this->morphedByMany(ReportScam::class, 'assetable');
    }
}
