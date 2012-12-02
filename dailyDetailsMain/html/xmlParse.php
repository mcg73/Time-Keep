<?php
$xml = XMLReader::open('details.xml');
$user = $xml->getAttribute('user');
// You must to use it
$xml->setParserProperty(XMLReader::VALIDATE, true);
echo("value".$user);


?>