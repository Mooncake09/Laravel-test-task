<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parcel_Location
 * @package App
 */
class ParcelLocation extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parcels()
    {
        return $this->belongsToMany(Parcel::class);
    }

    /**
     * @return ParcelLocation|null
     */
    public function scopeParcel(): ?ParcelLocation
    {
        return $this->parcels()->orderBy('date', 'desc')->limit(1)->first();
    }
}
