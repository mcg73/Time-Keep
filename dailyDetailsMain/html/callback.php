<?php
if (file_exists('details.xml')) {
    $xml = simplexml_load_file('details.xml');
    //print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
$xmlStr = $xml->asXML();
echo $xmlStr;
?>