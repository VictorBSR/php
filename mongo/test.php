<?php
  // connect to mongodb
  $m = new MongoClient("localvictor");

  echo "Connection to database successfully";
  // select a database
  $db = $m->dbphp7;

  echo "Database examplesdb selected";
?>