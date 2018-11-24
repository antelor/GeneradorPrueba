<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {
    public function testGenerarPreg() {
        $pregs = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');

        $pregunta = new Pregunta($pregs['preguntas'][0], 1);
        
        $this->assertTrue(isset($pregunta));   
    }
    public function testeoDeLosGet(){
        $pregs = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');
        $pregunta = new Pregunta($pregs['preguntas'][0], 1);
        $this->assertTrue(null !== $pregunta->getRespuestas());
        $this->assertTrue(null !== $pregunta->getNumero());
        $this->assertTrue(null !== $pregunta->getDescripcion());
        $this->assertTrue(null !== $pregunta->getRespCorrectas());
        $this->assertTrue(null !== $pregunta->getRespIncorrectas());
    }
}
