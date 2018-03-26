<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\ParcelLocation;

/**
 * Class LocationsTransformer
 * @package App\Transformers
 */
class LocationsTransformer extends TransformerAbstract
{
    /**
     * @param ParcelLocation $location
     * @return array
     */
    public function transform(ParcelLocation $location)
    {
        return [
            'location' => $location->getAttribute('location'),
            'date'     => $location->getAttribute('date')
        ];
    }
}