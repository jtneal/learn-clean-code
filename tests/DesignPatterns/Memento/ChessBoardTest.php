<?php

namespace LearnCleanCode\DesignPatterns\Memento;

/**
 * Class ChessBoardTest
 * @package LearnCleanCode\DesignPatterns\Memento
 */
class ChessBoardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ChessBoard
     */
    private $board;

    /**
     * @var string
     */
    private $standardLayout = '' .
        'WR,WN,WB,WK,WQ,WB,WN,WR,' .
        'WP,WP,WP,WP,WP,WP,WP,WP,' .
        '--,--,--,--,--,--,--,--,' .
        '--,--,--,--,--,--,--,--,' .
        '--,--,--,--,--,--,--,--,' .
        '--,--,--,--,--,--,--,--,' .
        'BP,BP,BP,BP,BP,BP,BP,BP,' .
        'BR,BN,BB,BK,BQ,BB,BN,BR';

    /**
     * Setup
     */
    public function setUp()
    {
        $this->board = new ChessBoard();
    }

    /**
     * Test Can Add Piece
     */
    public function testCanAddPiece()
    {
        $this->board->setPiece(0, 0, ChessBoard::ROOK);
        $this->assertPieceAt(ChessBoard::ROOK, 0, 0);

        $this->board->setPiece(7, 7, ChessBoard::PAWN);
        $this->assertPieceAt(ChessBoard::PAWN, 7, 7);
    }

    public function setupBoard()
    {
        $this->board->setup($this->standardLayout);

        $this->assertPieceAt(ChessBoard::ROOK, 0, 0);
        $this->assertPieceAt(ChessBoard::KNIGHT, 1, 0);
        $this->assertPieceAt(ChessBoard::BISHOP, 2, 0);
        $this->assertPieceAt(ChessBoard::KING, 3, 0);
        $this->assertPieceAt(ChessBoard::QUEEN, 4, 0);
        $this->assertPieceAt(ChessBoard::BISHOP, 5, 0);
        $this->assertPieceAt(ChessBoard::KNIGHT, 6, 0);
        $this->assertPieceAt(ChessBoard::ROOK, 7, 0);

        for ($file = 0; $file < 8; $file++) {
            $this->assertPieceAt(ChessBoard::PAWN, $file, 1);
        }

        for ($rank = 2; $rank < 6; $rank++) {
            for ($file = 0; $file < 8; $file++) {
                $this->assertPieceAt(ChessBoard::EMPTY, $file, $rank);
            }
        }

        for ($file = 0; $file < 8; $file++) {
            $this->assertPieceAt(-ChessBoard::PAWN, $file, 6);
        }

        $this->assertPieceAt(-ChessBoard::ROOK, 0, 7);
        $this->assertPieceAt(-ChessBoard::KNIGHT, 1, 7);
        $this->assertPieceAt(-ChessBoard::BISHOP, 2, 7);
        $this->assertPieceAt(-ChessBoard::KING, 3, 7);
        $this->assertPieceAt(-ChessBoard::QUEEN, 4, 7);
        $this->assertPieceAt(-ChessBoard::BISHOP, 5, 7);
        $this->assertPieceAt(-ChessBoard::KNIGHT, 6, 7);
        $this->assertPieceAt(-ChessBoard::ROOK, 7, 7);
    }

    /**
     * @param int $expectedPiece
     * @param int $file
     * @param int $rank
     */
    private function assertPieceAt(int $expectedPiece, int $file, int $rank)
    {
        $this->assertEquals($expectedPiece, $this->board->getPiece($file, $rank));
    }

    /**
     * Test Equals
     */
    public function testEquals()
    {
        $board = new ChessBoard();
        $this->board->setup($this->standardLayout);
        $board->setup($this->standardLayout);

        $this->assertEquals($board, $this->board);
    }

    /**
     * Test Not Equals
     */
    public function testNotEquals()
    {
        $board = new ChessBoard();
        $this->board->setPiece(5, 5, ChessBoard::PAWN);
        $board->setPiece(5, 5, ChessBoard::ROOK);

        $this->assertFalse($this->board->equals($board));
    }

    /**
     * Test Simple Memento
     */
    public function testSimpleMemento()
    {
        $board = new ChessBoard();
        $this->board->setPiece(5, 5, ChessBoard::PAWN);
        $board->setMemento($this->board->getMemento());

        $this->assertEquals(ChessBoard::PAWN, $board->getPiece(5, 5));
    }

    /**
     * Test Black Memento
     */
    public function testBlackMemento()
    {
        $board = new ChessBoard();
        $this->board->setPiece(5, 5, -ChessBoard::PAWN);
        $board->setMemento($this->board->getMemento());

        $this->assertEquals(-ChessBoard::PAWN, $board->getPiece(5, 5));
    }

    /**
     * Test Memento Standard Layout
     */
    public function testMementoStandardLayout()
    {
        $this->board->setup($this->standardLayout);
        $memento = $this->board->getMemento();
        $board = new ChessBoard();
        $board->setMemento($memento);

        $this->assertTrue($this->board->equals($board));
    }
}
