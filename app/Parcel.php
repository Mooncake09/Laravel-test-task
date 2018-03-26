<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parcel
 * @package App
 */
class Parcel extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'tracking_code',
        'status',
        'stock_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany(ParcelLocation::class)->orderBy('date', 'desc');
    }
}
