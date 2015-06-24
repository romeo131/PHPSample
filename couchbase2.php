<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Connect to Couchbase Server
$cluster = new CouchbaseCluster("http://192.168.1.18:8091", "Administrator", "netmarble1!", "beer-sample");

$bucket = $cluster->openBucket('beer-sample');

// Retrieve a document
$result = $bucket->get('aass_brewery-juleol');
$doc = $result->value;

//echo $doc->name.', ABV: '.$doc->abv."\n";
echo $doc->name;

// Store a document
$doc->comment = 'Random beer from Norway';
$result = $bucket->replace('aass_brewery-juleol', $doc);

var_dump($result);
?>