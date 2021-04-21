<?php

namespace Katas\Bowling;

use PHPUnit\Framework\TestCase;
class GameTest extends TestCase
{
    public function testTest()
    {
        $game = new Game();
        $this->asserInstanceOf(Game::class, $game);
    }
}