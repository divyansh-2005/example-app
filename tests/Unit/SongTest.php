<?php

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Practicals\song;

class SongTest extends TestCase {
    public function testSetAndGetTempo() {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo(60);
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }

    public function testSetTempoAcceptsIntegerString(): void
    {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo("60");
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }
    public function testSetTempoRejectsAlphabetString():void
    {
        // Arrange
        $this->expectException(InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat() {
        // Arrange
        $this->expectException(InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo(60.5);
    }
}
?>