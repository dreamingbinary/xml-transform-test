<?php
/*
http://php.net/manual/en/xsltprocessor.transformtoxml.php
http://php.net/manual/en/xsltprocessor.transformtodoc.php
http://stackoverflow.com/questions/3666606/utf-8-encoding-problem-with-xslt-via-php

Had issues with setting XML output options, until I came across this:
http://www.sagehill.net/docbookxsl/OutputEncoding.html.
Now new XML document correctly outputting as UTF-8 encoding.



*/


//$proc = new XSLTProcessor;
//if (!$proc->hasExsltSupport()) {
//    die('EXSLT support not available');
//}else{
//    die('EXSLT support is available!');
//}


// Load the XML source
$xml = new DOMDocument('1.0', 'utf-8');
$xml->load('XMLFile1.xml');

// Load the XSLT
$xsl = new DOMDocument('1.0', 'utf-8');
$xsl->load('XSLTFile1.xslt');

// Configure the transformer
$p = new XSLTProcessor;
$p->importStyleSheet($xsl); // attach the xsl rules
$newXML = $p->transformToXML($xml);

file_put_contents("XMLFile3.xml", $newXML);

//$newDoc = $p->transformToDoc($xml);
//file_put_contents("XMLFile4.xml", $newDoc->saveXML());
