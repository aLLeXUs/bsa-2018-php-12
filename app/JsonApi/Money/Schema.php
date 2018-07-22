<?php

namespace App\JsonApi\Money;

use App\Entity\Money;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'money';

    /**
     * @var array
     */
    protected $attributes = [
        'amount',
    ];

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getKey();
    }

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'amount' => $resource->amount,
        ];
    }

    /**
     * @param Money $resource
     * @param bool $isPrimary
     * @param array $includedRelationships
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includedRelationships)
    {
        return [
            'currency' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['user']),
                self::DATA => function () use ($resource) {
                    return $resource->currency;
                },
            ],
            'wallet' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['money']),
                self::DATA => function () use ($resource) {
                    return $resource->wallet;
                },
            ],
        ];
    }
}
