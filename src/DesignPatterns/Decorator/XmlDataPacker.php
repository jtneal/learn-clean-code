<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Class XmlDataPacker
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
class XmlDataPacker extends DataPackerDecorator
{
    /**
     * @return array
     */
    public function renderData(): array
    {
        $xml = new \SimpleXMLElement('<response/>');
        $data = $this->wrapped->renderData();

        foreach ($data as $key => $item) {
            $xml->addChild($key, $item);
        }

        return ['response' => $xml->asXML()];
    }
}
