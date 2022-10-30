<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platformable extends Model
{
    use HasFactory;

     /**
     * Get all of the reported scams that are assigned this platform.
     */
    public function reportScams()
    {
        return $this->morphedByMany(ReportScam::class, 'assetable');
    }
}
