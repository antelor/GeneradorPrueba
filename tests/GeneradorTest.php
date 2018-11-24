<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    /**
     * testGenerar
     * Comprueba que se pueda crear un generador de pruebas
     * @return void
     */
    public function testGenerar() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertTrue(isset($generador));   
    }

    /**
     * testCantPreguntas
     * Comprueba que la cantidad de preguntas que devuelve getCantPreguntas sea correcta
     * @return void
     */
    public function testCantPreguntas() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertEquals(10, $generador->getCantPreguntas());   
    }
    /**
     * testPreguntas
     * Comprueba que devuelva las preguntas la funcion getPreguntas
     * @return void
     */
    public function testPreguntas() {
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');
        $this->assertTrue(null !== $generador->getPreguntas());
    }
}
