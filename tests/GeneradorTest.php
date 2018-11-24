<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertTrue(isset($generador));   
    }

    public function testCantPreguntas() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertEquals(10, $generador->getCantPreguntas());   
    }
    public function testPreguntas() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertTrue(null !== $generador->getPreguntas());
    }
}
