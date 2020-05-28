<?php
/*
 * Criamos a instância de nosso cliente de webservice.
 * Especificamos a localização e o namespace do servidor de
 * webservice. 
 * Passando null no primeiro parâmetro do construtor indicamos
 * que o webservice irá trabalhar no modo não WSDL.
 */
$options = [
    'location' => 'http://localhost/php-soap-test/server.php',
    'uri' => 'http://localhost/php-soap-test/server.php'
];
 
$client = new SoapClient(null, $options);
 
/*
 * No Objeto $client podemos usar os métodos da classe 
 * SoapServerExemplo disponível em nosso webservice.
 */
echo $client->mensagem('Claudia') . "<br>";
echo $client->soma(3, 5) . "<br>";