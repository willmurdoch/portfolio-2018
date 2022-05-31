<?php

function sortByNameOrder($a, $b){
  return strcmp($a["lastname"], $b["lastname"]);
}

function sortByNumberOrder($a, $b){
  return $a['jersey'] - $b['jersey'];
}

function sortByAgeOrder($a, $b){
  return $a['birthdate'] - $b['birthdate'];
}

function sortByHeightOrder($a, $b){
  return $b['newHeight'] > $a['newHeight'] ? -1 : 1;
}

function sortByWeightOrder($a, $b){
  return $a['weight'] - $b['weight'];
}
?>
