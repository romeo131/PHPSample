<?php
//connect
$cluster = new CouchbaseCluster('http://192.168.1.18:8091');
$bucket = $cluster->openBucket('beer-sample');

//retrieve
$result = $bucket->get('aass_brewery-juleol');
$doc = $result->value;

echo $doc->name . ', ABV: ' . $doc->abv . "\n";

//store doc
$doc.comment = 'Random beer from Walnut Creek';
$result = $bucket->replace('aass_brewery-juleol', $doc);

var_dump($result);
?>