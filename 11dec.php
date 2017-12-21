<?php

$july = date("f");

function writeMsg($july){
 if ($july =='july'){
   echo "It's July, so it can get really hot.";
 }else {
   echo "its not July, so at least we're not in the peak of the heat";
 }

}

print writeMsg($july);






 ?>
