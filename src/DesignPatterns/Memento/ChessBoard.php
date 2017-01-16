<?php

namespace LearnCleanCode\DesignPatterns\Memento;

/**
 * Class ChessBoard
 * @package LearnCleanCode\DesignPatterns\Memento
 */
class ChessBoard
{
    /**
     * The chess pieces
     */
    const PAWN = 1;
    const ROOK = 2;
    const KNIGHT = 3;
    const BISHOP = 4;
    const QUEEN = 5;
    const KING = 6;
    const EMPTY = 0;

    /**
     * @var int[]
     */
    private $board;

    /**
     * ChessBoard constructor.
     */
    public function __construct()
    {
        $this->board = array_fill(0, 64, self::EMPTY);
    }

    /**
     * @return int[]
     */
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * @param ChessBoard $otherBoard
     * @return bool
     */
    public function equals(ChessBoard $otherBoard)
    {
        $board = $otherBoard->getBoard();

        for ($i = 0; $i < 64; $i++) {
            if ($this->board[$i] !== $board[$i]) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param string $layout
     */
    public function setup(string $layout) {
        $squares = explode(',', $layout);

        for ($i = 0; $i < 64; $i++) {
            switch (substr($squares[$i], 1, 1)) {
                case 'P':
                    $piece = self::PAWN;
                    break;
                case 'R':
                    $piece = self::ROOK;
                    break;
                case 'N':
                    $piece = self::KNIGHT;
                    break;
                case 'B':
                    $piece = self::BISHOP;
                    break;
                case 'K':
                    $piece = self::KING;
                    break;
                case 'Q':
                    $piece = self::QUEEN;
                    break;
                default:
                    $piece = self::EMPTY;
            }

            if (substr($squares[$i], 0, 1) === 'B') {
                $piece = -$piece;
            }

            $this->board[$i] = $piece;
        }
    }

    /**
     * @param int $file
     * @param int $rank
     * @return int
     */
    public function getPiece(int $file, int $rank)
    {
        return $this->board[$rank * 8 + $file];
    }

    /**
     * @param int $file
     * @param int $rank
     * @param int $piece
     */
    public function setPiece(int $file, int $rank, int $piece)
    {
        $this->board[$rank * 8 + $file] = $piece;
    }

    /**
     * @return ChessBoardMementoInterface
     */
    public function getMemento(): ChessBoardMementoInterface
    {
        $chessBoardMemento = new ChessBoardMemento();
        $chessBoardMemento->pack($this->board);

        return $chessBoardMemento;
    }

    /**
     * @param ChessBoardMementoInterface $chessBoardMemento
     */
    public function setMemento(ChessBoardMementoInterface $chessBoardMemento)
    {
        $this->board = $chessBoardMemento->unpack();
    }
}
