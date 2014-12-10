<?php

// This demonstrates how to use the try, catch and throw functionality of exception handling in PHP

$age = 16;

try {
  if ($age>18){
    echo 'Old enough.';
   } else {
     throw new Exception ('Not old enough.');
   }
} catch (Exception $ex) {
    echo 'Error: '.$ex->getMessage();
}

?>
