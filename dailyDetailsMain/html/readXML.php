<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.

if (file_exists('details.xml')) {
    $xml = simplexml_load_file('details.xml');
    echo($xml);
} else {
    exit('Failed to open test.xml.');
}
?>