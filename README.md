# GeneradorPrueba
[![Build Status](https://travis-ci.org/antelor/GeneradorPrueba.svg?branch=master)](https://travis-ci.org/antelor/GeneradorPrueba)

[![Coverage Status](https://coveralls.io/repos/github/antelor/GeneradorPrueba/badge.svg?branch=master)](https://coveralls.io/github/antelor/GeneradorPrueba?branch=master)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/antelor/GeneradorPrueba/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/antelor/GeneradorPrueba/?branch=master)

Hosteado en:
https://anteloregolo.herokuapp.com

Este proyecto consiste en una pagina web, la cual luego de clickear en el boton de Generar Pruebas, genera 2 pruebas multiple choice y 2 paginas con las respuestas correctas de esas pruebas. Las 2 pruebas son generadas en base a un archivo yml parseado.
Limitaciones:
- Solo genera 2 temas
- En el caso de que haya mas de una respuesta correcta, indica las 2 opciones, en lugar de crear una opcion que incluya las 2
