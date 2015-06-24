<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//[CouchbaseNative]/CouchbaseBucket.class.php:74\n
//$cluster = new CouchbaseCluster('http://192.168.1.18:8091');
//$cluster = new CouchbaseCluster('couchbase://localhost');

$cluster = new CouchbaseCluster('http://127.0.0.1:8091');
$bucket = $cluster->openBucket('beer-sample');
//var_dump($bucket);

// Retrieve a document
$result = $bucket->get('aldaris');
$doc = $result->value;
var_dump($doc);
//echo $doc->name.', ABV: '.$doc->abv."\n";
var_dump($doc->name);

echo $doc->name;
echo "6<br>";
// Store a document
$doc->comment = 'Random beer from Norway';
$result = $bucket->replace('aldaris', $doc);

var_dump($result);
?>