<?php

namespace LearnCleanCode\DesignPatterns\Memento;

/**
 * Class ChessBoardMemento
 * @package LearnCleanCode\DesignPatterns\Memento
 */
class ChessBoardMemento implements ChessBoardMementoInterface
{
    /**
     * @var int[]
     */
    private $memo;

    /**
     * @param int[] $board
     */
    public function pack(array $board)
    {
        for ($i = 0; $i < 32; $i++) {
            $nibble1 = $board[$i * 2] & 0xf;
            $nibble2 = $board[$i * 2 + 1] & 0xf;

            $this->memo[$i] = ($nibble1 << 4 | $nibble2);
        }
    }

    /**
     * @return int[]
     */
    public function unpack(): array
    {
        $board = [];

        for ($i = 0; $i < 32; $i++) {
            $nibble1 = $this->memo[$i] >> 4 & 0xf;
            $nibble2 = $this->memo[$i] & 0xf;
            $nibble1 = $this->extendSign($nibble1);
            $nibble2 = $this->extendSign($nibble2);
            $board[$i * 2] = $nibble1;
            $board[$i * 2 + 1] = $nibble2;
        }

        return $board;
    }

    /**
     * @param int $nibble
     * @return int
     */
    private function extendSign(int $nibble): int
    {
        if (($nibble & 0x8) === 0x8) {
            return $nibble | (-1 & (~0xf));
        } else {
            return $nibble;
        }
    }
}
