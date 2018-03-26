<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class TokenTransformer
 * @package App\Api\V1\Transformers
 */
class TokenTransformer extends TransformerAbstract
{
    /**
     * @var array
     */
    protected $availableIncludes = [
        'user'
    ];

    /**
     * @param User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'token' => JWTAuth::fromUser($user)
        ];
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function includeUser(User $user)
    {
        return $this->item($user, new UserTransformer);
    }
}