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
        //$this->assertTrue(null !== $pregs->getNumero());
        $this->assertTrue(null !== $pregs->getDescripcion());
        $this->assertTrue(null !== $pregs->getRespCorrectas());
        $this->assertTrue(null !== $pregs->getRespIncorrectas());
    }
}
