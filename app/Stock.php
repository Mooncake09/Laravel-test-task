<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stock
 * @package App
 */
class Stock extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parcels() {
        return $this->hasMany(Parcel::class);
    }
}
