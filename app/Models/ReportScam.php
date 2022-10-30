<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportScam extends Model
{
    use HasFactory;

    /**
     * Get all of the lost asset for the reported scam.
     */
    public function lostAssets()
    {
        return $this->morphToMany(Asset::class, 'assetable');
    }


    /**
     * Get all of the platforms used for the reported scam.
     */
    public function usePlatform()
    {
        return $this->morphToMany(Platform::class, 'platformable');
    }
}
