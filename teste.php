<?php

$uri = 'http://soapclient.com/xml/soapresponder.wsdl';

$client = new SoapClient($uri);
$function = 'Method1';
$arguments= [
            'bstrParam1' => 'teste',
            'bstrParam2' => 'teste2'
            ];

$result = $client->__soapCall($function, $arguments);
echo 'Response: ';
print_r($result);


?>