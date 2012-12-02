<?php
include_once('simple_html_dom.php');
include_once('xmlCreator.php');
include_once('xmlDoc.php');
include('details.php');
//get user interface of application 
$html = file_get_html('mahTimeUI.html'); 
//echo $movies->movie[0]->plot;
//variable assignments from user side to server side -->
$name = $_POST['name'];
$date = $_POST['datepicker'];
$tIn = $_POST['timeIn'];
$tOut = $_POST['timeOut'];
$comments = $_POST['comments'];
$totalHrs = $_POST['totHr'];
$xmlDetail = new detailCreate($name, $date, $tIn, $tOut, $comments, $totalHrs);
//------------------->variable assignments that create strings for each of the inputs
$xmlUsernameStr = $xmlDetail->userString();
$xmlDateStr = $xmlDetail->dateString();
$xmlTimeOutStr = $xmlDetail->outString();
$xmlTimeInStr = $xmlDetail->inString();
$xmlNoteStr = $xmlDetail->noteString();
$xmlTotsStr = $xmlDetail->hourString();
//<------------------all assignments end
//$stringX = new SimpleXMLElement('xmlStr');
//$fx = fopen("details.xml", "a");

//$xmlDetailTag = new SimpleXMLElement('<detail></detail>');
//$xml->createElement('detail');
//$xml->addChild('detail');
//$xml->addChild('user', $name );
//$xml->addChild('date', $date );
//$xml->addChild('inTime', $tIn );
//$xml->addChild('outTime', $tOut );
//$xml->addChild('notes', $comments );
//file_put_contents('details.xml', $xml->asXML());
//$xml = simplexml_load_file('details.xml');
$sxe = new SimpleXMLElement($stringX);
//$detail = $sxe->addChild('detail');
$detail = new SimpleXMLElement('<detail></detail>');
$username = $detail->addChild('user', $name);
$theDate = $detail->addChild('date', $date);
$theIn = $detail->addChild('inTime', $tIn);
$theOut = $detail->addChild('outTime', $tOut);
$theNote = $detail->addChild('notes', $comments);
$theTots = $detail->addChild('totalHrs', $totalHrs);
//$detail->addChild('date', $date);
//$detail->addChild('inTime', $tIn );
//$detail->addChild('outTime', $tOut );
//$detail->addChild('notes', $comments);
//$detail->addChild('totalHrs', $totalHrs);


// We insert the new element as root (child of the document)
//$dom->appendChild($element);
//$dom->appendChild('user', $name );
//echo $dom->saveXML();
//$sxml = new SimpleXmlElement(file_get_contents('details.xml'));
//print_r($stringX);

    
    //$xmlDetailTag->username = $xmlUsernameStr;
    //$aUserTag = $sxml->detail->addChild('user');
	//$aUserTag [] = $xmlUsernameStr;
	//$aDateTag = $sxml->detail->addChild('theDate'); 
	//$aDateTag  [] = $xmlDateStr;
	//$aTimeInTag = $sxml->detail->addChild('timeIn');
	//$aTimeInTag [] = $xmlTimeInStr;
	//$aTimeOutTag = $sxml->detail->addChild('timeOut');
	//$aTimeOutTag [] = $xmlTimeOutStr;
	//$aTotHourTag = $sxml->detail->addChild('totHours');
	//$aTotHourTag [] = $xmlTotsStr;
	//$aNoteTag = $sxml->detail->addChild('notes');
	//$aNoteTag [] = $xmlNoteStr;
    //echo htmlentities($sxml->asXML());

//fwrite($fx, htmlentities($sxml->asXML()));
//print_r($fx);
//every input detail for all users-open file
$fz = fopen("alldata.txt", "a");
//user specific details-open file 
$fp = fopen("$name.txt", "a");
//assignment of all user input data to local varialble--> 
$details = "\n" . $name . "\n" . $date . "\n" . "time in:" . " " . $tIn . "\n" . "time out: " . $tOut . "\n" . "notes: " . $comments . "\n" . "hours today: "."|" . $totalHrs. "|"."\n";
//<----end $details assignment
//write to the files and close the files--->
fwrite($fp, $details);
fwrite($fz, $details);
fclose($fp);
fclose($fz);
//echo $sxml->asXML();
//fclose($fx);
//<---files closed
//redirect to the input page ready for user input
header("Location: http://www.mcgrawtheseeker.com/mahDetailsProject/html/mahTimeUI.html");
//header("Location: http://www.mcgrawtheseeker.com/mahDetailsProject/html/details.php");
//echo $sxe->asXML();
?>