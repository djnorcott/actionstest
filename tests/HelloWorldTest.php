<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../helloWorld.php';

class HelloWorldTest extends TestCase {
    public function testSayHelloReturnsHelloWorld() {
        $hello = new HelloWorld();
        $this->assertEquals('hello worlda', $hello->sayHello());
    }
}

