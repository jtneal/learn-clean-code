<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Class JsonDataPacker
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
class JsonDataPacker extends DataPackerDecorator
{
    /**
     * @return array
     */
    public function renderData(): array
    {
        $data = $this->wrapped->renderData();

        return ['response' => json_encode($data)];
    }
}
