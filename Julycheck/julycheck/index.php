<?php
$currentDate = date("m");


function checkMonth($currentDate){
if ($currentDate == 7){
  echo "It's July, so it can get really hot.";}
else {
  echo "It’s not July, so at least we’re not in the peak of the heat.";}}

checkMonth($currentDate);
?>
