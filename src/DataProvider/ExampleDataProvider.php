<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Data\ExampleData;
use App\Entity\Example;

final class ExampleDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface, ItemDataProviderInterface
{
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Example::class === $resourceClass;
    }

    public function getCollection(string $resourceClass, string $operationName = null, array $context = []): \Generator
    {
        for ($i = 0; $i < 3; $i++) {
            $e = new Example();
            $e->id = $i;
            $e->label = "Example ${i}";
            yield $e;
        }
    }

    public function getItem(string $resourceClass, $id, ?string $operationName = null, array $context = [])
    {
        $e = new Example();
        $e->id = $id;
        $e->label = "Example ${id}";

        return $e;
    }
}
