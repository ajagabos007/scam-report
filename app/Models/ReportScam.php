<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportScam extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_in_progress' => false,
    ];

    /**
     * Get all of the lost asset for the reported scam.
     */
    public function type()
    {
        return $this->belongsTo(ScamType::class, 'scam_type_id');
    }

    /**
     * Get all of the lost asset for the reported scam.
     */
    public function lostAssets()
    {
        return $this->morphToMany(Asset::class, 'assetable')->withPivot('data');
    }



    /**
     * Get all of the platforms used for the reported scam.
     */
    public function platforms()
    {
        return $this->morphToMany(Platform::class, 'platformable')->withPivot('link');
    }
}
