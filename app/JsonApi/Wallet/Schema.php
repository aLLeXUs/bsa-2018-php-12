<?php

namespace App\JsonApi\Wallet;

use App\Entity\Wallet;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'wallet';

    /**
     * @var array
     */
    protected $relationships = [
        'user',
        'money',
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
        ];
    }

    /**
     * @param Wallet $resource
     * @param bool $isPrimary
     * @param array $includedRelationships
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includedRelationships)
    {
        return [
            'user' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['user']),
                self::DATA => function () use ($resource) {
                    return $resource->user;
                },
            ],
            'money' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::SHOW_DATA => isset($includedRelationships['money']),
                self::DATA => function () use ($resource) {
                    return $resource->money;
                },
            ],
        ];
    }
}
