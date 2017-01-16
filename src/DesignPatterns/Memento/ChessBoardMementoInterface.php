<?php

namespace LearnCleanCode\DesignPatterns\Memento;

/**
 * Interface ChessBoardMementoInterface
 * @package LearnCleanCode\DesignPatterns\Memento
 */
interface ChessBoardMementoInterface
{
    /**
     * @param array $board
     */
    public function pack(array $board);

    /**
     * @return int[]
     */
    public function unpack(): array;
}
