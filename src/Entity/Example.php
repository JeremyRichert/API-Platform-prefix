<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Filter\SearchFilter;

/**
 * Exemple d'objet utilisé dans l'API.
 * @ApiResource(
 *  collectionOperations={"get"},
 *  itemOperations={"get"},
 *  routePrefix="/"
 * )
 */
class Example
{
    /**
     * @var int Unique ID
     *
     * @ApiProperty(identifier=true, writable=false)
     */
    public $id;

    /**
     * @var string Label
     */
    public $label;
}
