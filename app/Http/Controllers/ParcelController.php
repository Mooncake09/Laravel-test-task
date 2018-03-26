<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\Transformers\ParcelTransformer;

/**
 * Class ParcelController
 * @package App\Http\Controllers
 */
class ParcelController extends BaseController
{
    /**
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::paginate(10);

        return $this->response->paginator($parcels, new ParcelTransformer);
    }
}
