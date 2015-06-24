<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Connect to Couchbase Server
//$cluster = new CouchbaseCluster('http://192.168.1.18:8091');
//$cluster = new CouchbaseCluster('couchbase://localhost');
echo "1<br>";
$cluster = new CouchbaseCluster('http://127.0.0.1:8091');
echo "2<br>";
$bucket = $cluster->openBucket('beer-sample');
echo "3<br>";
// Retrieve a document
$result = $bucket->get('aldaris');
echo "4<br>";
$doc = $result->value;
echo "5<br>";
//echo $doc->name.', ABV: '.$doc->abv."\n";
echo "goforit : ".$doc->name;
echo "6<br>";
// Store a document
$doc->comment = 'Random beer from Norway';
echo "7<br>";
$result = $bucket->replace('aldaris', $doc);
echo "8<br>";
var_dump($result);
?>