<?php

class RandomProcessorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function the_random_processor_works()
    {
        // SETUP
        $mockJsonWriter = $this->createMock(\App\JsonFileWriter::class);
        $mockJsonWriter->method('writeToFile')->willReturn(true);

        $processor = new \App\RandomProcessor($mockJsonWriter);

        // DO SOMETHING
        $result = $processor->process(['foo' => 'bar']);

        // MAKE ASSERTIONS
        $this->assertTrue($result);
    }
}