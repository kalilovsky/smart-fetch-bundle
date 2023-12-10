<?php

namespace Verclam\SmartFetchBundle\Fetcher\ResultsJoiner;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Verclam\SmartFetchBundle\Fetcher\TreeBuilder\Component\Component;

interface ResultsJoinerInterface
{
    public function joinResult(Component $component, array &$result = []): array;
}