<?php

namespace LearnCleanCode\DesignPatterns\Mediator;

/**
 * Class FilterArrayMediator
 * @package LearnCleanCode\DesignPatterns\Mediator
 */
class FilterArrayMediator
{
    /**
     * FilterArrayMediator constructor.
     * @param string $searchText
     * @param array $dataArray
     */
    public function __construct(string $searchText, array &$dataArray)
    {
        $dataArray = array_values(array_filter($dataArray, function ($item) use ($searchText) {
            return strpos($item, $searchText) === 0;
        }));
    }
}
