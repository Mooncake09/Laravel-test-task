<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Parcel;

/**
 * Class ParcelTransformer
 * @package App\Api\V1\Transformers
 */
class ParcelTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'stock',
        'locations'
    ];

    /**
     * @param Parcel $parcel
     * @return array
     */
    public function transform(Parcel $parcel)
    {
        return [
            'id' => $parcel->getAttribute('id'),
        ];
    }

    /**
     * @param Parcel $parcel
     * @return \League\Fractal\Resource\Item
     */
    public function includeStock(Parcel $parcel)
    {
        return $this->item($parcel->getRelationValue('stock'), new StockTransformer);
    }

    /**
     * @param Parcel $parcel
     * @return \League\Fractal\Resource\Collection
     */
    public function includeLocations(Parcel $parcel)
    {
        return $this->collection($parcel->getRelationValue('locations'), new LocationsTransformer);
    }
}