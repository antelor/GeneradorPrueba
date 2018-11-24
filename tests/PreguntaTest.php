<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {
    /**
     * testGenerarPreg
     *  Comprueba que se pueda crear un objeto pregunta
     * @return void
     */
    public function testGenerarPreg() {
        $pregs = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');

        $pregunta = new Pregunta($pregs['preguntas'][0], 1);
        
        $this->assertTrue(isset($pregunta));   
    }
    /**
     * testeoDeLosGet
     * Comprueba que se reciba algo cuando se piede que le devuelvan los datos del objeto pregunta
     * @return void
     */
    public function testeoDeLosGet(){
        $pregs = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');
        $pregunta = new Pregunta($pregs['preguntas'][0], 1);
        $this->assertTrue(null !== $pregunta->getRespuestas());
        $this->assertTrue(null !== $pregunta->getCantRespuestas());
        $this->assertTrue(null !== $pregunta->getNumero());
        $this->assertTrue(null !== $pregunta->getDescripcion());
        $this->assertTrue(null !== $pregunta->getRespCorrectas());
        $this->assertTrue(null !== $pregunta->getRespIncorrectas());
    }
}
