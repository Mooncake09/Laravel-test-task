<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Stock;

/**
 * Class StockTransformer
 * @package App\Api\V1\Transformers
 */
class StockTransformer extends TransformerAbstract
{
    public function transform(Stock $stock)
    {
        return [
            'id' => $stock->id,
            'name' => $stock->name
        ];
    }
}